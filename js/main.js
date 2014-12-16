var cur = 0;

var pages = ["#intro", "#article", "#question", "#tagpage", "#review"];

var readability_url = "https://www.readability.com/api/content/v1/parser?token=43e6e0e0b590f00a095a6a0e64f6c9da11783a5a&callback=?&url=";
var gform_url = "https://docs.google.com/forms/d/12NtdP2XHZMxH9PR_vfdYs5c7Pa17TYBU5tcQwnedyjw/formResponse";
// name , ques 1 ,..., ques 10, article_url, article_content, article_annotation, article_headline
var field_ids = ["entry.215751540","entry.623526571","entry.1476092598","entry.309895902","entry.571080810","entry.1188901335","entry.1897769701","entry.404944299","entry.1910145078","entry.926592991","entry.562869012","entry.1780171989","entry.1227660023","entry.528936757","entry.1002450135"];

var bg_color = [];
var ANNOTATION_DATA = [[],[],[]];
var ANSWER = {};

var cur_art_url;
var headline;
var title;
var names = [];

function show(obj) {
    if(obj.hasClass("hidden-field")) {
        obj.removeClass("hidden-field");
    }
}

function hide(obj) {
    if(!obj.hasClass("hidden-field")) {
        obj.addClass("hidden-field");
    }
}

function loadState(s) {
    if(cur == 2) {
        if(cur_art_url) {
            if(cur_art_url != $("#url-box").val()) { // anlyzing a new article
                ANSWER = [];
                ANNOTATION_DATA = [[],[],[]];
                $("#rv-at").html("");
                $("#rv-ques").html("");
            }
        }
        cur_art_url = $("#url-box").val();
    }    
    window.location.hash = pages[s];
    // hide all divs
    for(var i =  0; i < pages.length; i ++) {
        hide($(pages[i]));
    }
    // show the one on state 
    show($(pages[s]));
    scroll(0,0);
}

function renderArticle(headline, content) {
    $(".at-hl").empty().html("<h2>" + headline +"</h2><hr></hr>");
    $(".at-ct").empty().html(content.toString());
}

function next() {
    cur = cur + 1;
    loadState(cur);    
} 

$(document).ready(function() {

    $(".ss-choices").each(function() {
        names.push($(this).find("input").attr("name"));
    });
    $("#highlightbar input").each(function() {
        bg_color.push($(this).data("color"));
    });
    
    var hash = window.location.hash;
    cur = pages.indexOf(hash);
    if(cur == -1) {
        cur = 0;
    }
    loadState(cur);

    $("#goto-article").click(function() {
        url = readability_url + $("#url-box").val();
        $.getJSON(url, function(json) {
            headline = json.title;
            content = json.content;
            content = content.replace(/<[^<>]+>/g, "####")
                .replace(/((\#\#\#\#)(\s+)?)+/g, "<br><br>");
            renderArticle(headline, content);
            next();
        });
    });

    $("#goto-question").click(function() {
        next();
    });

    $("#ques-reset").click(function() {
        if(confirm('Are you sure you want to reset your response?')) {
            ANSWER = {};
            loadQues();
        }        
    });
    $("#goto-tagging").click(function() {
        // save doc options
        var f = saveQues();
        if(f) {
            next();
        }        
    });

    $("#finish").click(function() {
        // clear data
        ANSWER = [];
        ANNOTATION_DATA = [[],[],[]];
        cur_art_url = undefined;
        $("#url-box").val("");
        cur = 0;
        loadState(0);
    });
    
    window.onpopstate = function(event) {
        var hash = window.location.hash;
        cur = pages.indexOf(hash);
        loadState(cur);
        if(cur == 2) {
            loadQues();
        }
    }
    window.onpushstate = function(event) {
        var hash = window.location.hash;
        cur = pages.indexOf(hash);
        loadState(cur);
        if(cur == 2) {
            loadQues();
        }
    }

    /* tag page */
    $("#tag-content-container").mousedown(f).mouseup(g);
    $("#container").click(function() {
        f();
    });
    $("#highlightbar").mousedown(function(e) {
        e.preventDefault();
    });
    $(".tagbut").click(function() {
        var tag = $(this).val();
        var color = $(this).data("color");
        u(tag, color);
        $(this).prop("checked", false);
        // clear selection
        if (window.getSelection) {
            if (window.getSelection().empty) {  // Chrome
                window.getSelection().empty();
            } else if (window.getSelection().removeAllRanges) {  // Firefox
                window.getSelection().removeAllRanges();
            }
        } else if (document.selection) {  // IE?
            document.selection.empty();
        }
    });
    $("#goto-review").click(function() {
        savetag();
        submitCoding(function() {
            cur = cur + 1;
            window.location.hash = pages[cur];
            loadState(cur);
        });        
    });
    $("#tag-reset").click(function() {
        if(confirm('Are you sure you want to reset your response?')) {
            ANNOTATION_DATA = [[],[],[]];
            var node = document.getElementById('tag-content-container');
            var range = document.createRange();
            var sel = window.getSelection();
            range.selectNodeContents(node);
            document.designMode = "on";
            if(range) {
                sel.removeAllRanges();
                sel.addRange(range);
            }
            if(!document.execCommand("HiliteColor", false, "transparent")) {
                document.execCommand("BackColor", false, "transparent");
            }
            document.designMode = "off";
            if(window.getSelection()) {
                var sel = window.getSelection();
                sel.removeAllRanges();
                document.selection.empty();
            }            
        }        
    });

    /* Review page */
    $("#rv-bt").click(function() {
        $("#rv-at").html($("#tagged-article").html());
        $("#rv-ques").html($("#gform-container").html());
        $(".questionMark").hide();
        // fill in the form
        loadQuesAndSetReadOnly();
    });

});

function submitCoding(cont) {
    var data = "";
    var j = 0;
    var url = $("#url-box").val();
    for(var i = 0; i < field_ids.length; i ++) {
        data = data + field_ids[i] + "=";
        content = content.replace(/<[^<>]+>/g, "####")
            .replace(/((\#\#\#\#)(\s+)?)+/g, "<br><br>");
        content = content.replace(/(\r\n|\n|\r)/gm,"");
        if(i  == 0) { // 0: name
            data = data + ANSWER["name"];
        } else if (i >= 1 && i < 11) { // 1 to 10 : questions
            data = data + ANSWER[names[j]];
            j = j + 1;
        } else if (i == 11) { // 11: article_url
            data = data + url;
        } else if (i == 12) {  // 12: aritcle_content
            data = data + escape(content);
        } else if (i == 13) { // 13: article_annotation
            data = data + JSON.stringify(ANNOTATION_DATA);
        } else if (i == 14) { // 14: article_headline
            data = data + headline;
        }
        if(i != field_ids.length - 1) {
            data = data + "&"
        }
    }
    $.ajax({
        type: "POST",
        url: gform_url,
        data: data,
        complete: cont
    });
}

function loadQues() {
    $("#gform-container .ss-form-question .ss-q-short").val(ANSWER["name"]);
    $("#gform-container .ss-form-question .ss-choices input").each(function() {
        var name = $(this).attr("name");
        if($(this).val() === ANSWER[name]) {
            $(this).prop("checked", true);
        } else {
            $(this).prop("checked", false);
        }
    });
}

function loadQuesAndSetReadOnly() {
    $("#rv-ques .ss-form-question .ss-q-short").val(ANSWER["name"]);
    $("#rv-ques .ss-form-question .ss-q-short").attr("readonly", true);
    $("#rv-ques .ss-form-question .ss-choices input").each(function() {
        var name = $(this).attr("name");
        $(this).attr("disabled", "disabled");
        if($(this).val() === ANSWER[name]) {
            $(this).prop("checked", true);
        }
    });
}

function saveQues() {
    var name = $("#entry_98167410").val();
    ANSWER["name"] = name;
    var finish = true;
    $(".ss-choices").each(function() {
        var rName = $(this).find("input").attr("name");
        var checked = $(this).find("input[name=" + rName + "]:checked").val();
        if(!checked) {
            alert("You need to finish all required questions before proceed.");
            finish = false;
            return false;
        } else {
            ANSWER[rName] = checked;
        }
    });
    return finish;
}

function savetag() {
    $("#tag-content-container span").each(function() {
        var color = $(this).css("background-color")
        if(color) {
            var hex = rgb2hex(color).toUpperCase();
            var index = bg_color.indexOf(hex);
            var text = $(this).text();
            if(index <= 2 && index >= 0) {
                ANNOTATION_DATA[index].push(text);
            }
        }
    });
}

// set background color
function u(tag, color) {
    var i = window.getSelection();
    if(i && 0 != i.rangeCount) {
        var s = i.getRangeAt(0);
        if(!s.collapsed) {
            (c(tag, color)), f();
        }
    }
}

// render color
function c(tag, color) {
    var sel = window.getSelection();
    var range;
    sel.rangeCount && sel.getRangeAt && (range = sel.getRangeAt(0));
    $("#tag-content-container").attr("contentEditable", 1);
    document.designMode = "on";
    if(range) {
        sel.removeAllRanges();
        sel.addRange(range);
    }
    if(!document.execCommand("HiliteColor", false, color)) {
        document.execCommand("BackColor", false, color);
    }
    document.designMode = "off";
}

function rgb2hex(rgb) {
    rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
    function hex(x) {
        return ("0" + parseInt(x).toString(16)).slice(-2);
    }
    return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
}

// fadeOut highlighter
function f() {
    $("#highlightbar").stop(!0, !0).fadeOut(300)
}

// fade in highlighter
function g(e) {
    setTimeout(function() {
        if(window.getSelection) {
            var i = window.getSelection();
            if(i && 0 != i.rangeCount) {
                var s = i.getRangeAt(0);
                if(!s.collapsed) {
                    var l = $('#highlightbar').stop(!0, !0).fadeTo(100, 1);
                    var n = $('#tagged-article').offset();
                    l.css({
                        left: e.pageX + 10, 
                        top: e.pageY + 10
                    });
                }
            }
        }
    }, 50);
}
