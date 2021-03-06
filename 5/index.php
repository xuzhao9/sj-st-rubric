<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  </head>
  
  <body>
    <div id="container">
    <?php
      
    ?>
    <!-- Start of intro -->
      <div id="intro" class="hidden-field page">
      <p>
        Welcome to the solutions journalism coding tool and thanks in advance for your help with this project.
      </p>
      <p>
        You should have a link to the story that you will analyze using this tool. When you enter the link in the box at the bottom of this page, the content will be displayed on the next page. After reading the story, you will assess the "solution-i-ness" of the story by answering the five questions shown below. Then, you will use a highlighting tool to tag content related to the problem, the solution and the results, if any, described in the story. At the end of the assessment, you will have a chance to review the tagged story and your responses to the questions.
      </p>
      <p>
        Here are the five questions you will answer after reading the story.
        <ul>
          <li>1. Does the story explain the causes of a problem? </li>
          <li>2. Does the story present an associated solution to that problem? </li>
          <li>3. Does the story address the problem solving and how-to details of implementation?  </li>
          <li>4. Does the story present results, or indications of progress, linked to the solution? </li>
          <li>5.  Does the story convey an insight or teachable lesson? </li>
        </ul>
      </p>
      
      <div class="prompt">
        <p>
          While you fill in the questionnaire or highlight the article, please DO NOT refresh your webpage, because your prior work will be lost. If you wish to reset your answer, please use the RESET button.
        </p>
        <strong id="input-prompt"> Please enter a link to the story you wish to analyze. </strong> <br />
      </div>
      <input id="url-box" name="url" type="text" size="150" /> <br/>
      <div class="next-box">
        <button id="goto-article" class="next" type="button"> Start reading the story </button>
      </div>
    </div>
    
    <!-- Start of article -->
    <div id="article" class="hidden-field page">
      <div class="prompt">
        <h1> Article </h1>
        Please read the following article <b>once</b> and hit the button when finished.
      </div>
      <div class="article-box">
        <div class="at-hl"> </div>
        <div class="at-ct at-ct-plain">  </div>
      </div>
      <div class="next-box">
        <button id="goto-question" class="next" type="button"> I've finished reading the story. Bring me to the questions. </button>
      </div>
    </div>
    
    <!-- Start of question -->
    <div id="question" class="hidden-field page">
      Please answer the following questions based on your reading of the story. Click on the “Tell Me More” button at the end of each question for an explanation.
      <div class="question-box">
        <!--   BEGINNING OF GOOGLE FORM -->
        <div id="gform-container">          
          <form action=
                "https://docs.google.com/forms/d/13EyHZbX1Ln3M4Wqrl1dl8C8qiLt8cjL4ip00A016MI8/formResponse"
                id="ss-form-fake" method="post" name="ss-form" onsubmit="" target="_self">
                
            <div style="margin-left: 2em; padding-left: 0">
              <div id="user-info">
                <div class="ss-form-question errorbox-good"><!-- Start question 1: name -->
                        <div class="ss-item ss-item-required ss-text" dir="ltr">
                          <div class="ss-form-entry">
                            <label class="ss-q-item-label" for=
                                   "entry_98167410"></label>
                            <div class="ss-q-title">
                              <label class="ss-q-item-label" for=
                                     "entry_98167410">What is your name?
                                <label for= "itemView.getDomIdToLabel()"></label>
        
                              </label>
                            </div>
                            <div class="ss-q-help ss-secondary-text" dir="ltr">
                            </div>
                            <input class="ss-q-short" dir="auto" id=
                                         "entry_98167410" name="entry.98167410" required=""
                                         title="" type="text" value="">
                            <div class="error-message"></div>
                          </div>
                        </div>
                      </div> <!-- end question 1 -->
              </div>
              <div class="ss-form-question errorbox-good">
                <div class="ss-item ss-item-required ss-radio" dir="ltr">
                  <div class="ss-form-entry">
                    <label class="ss-q-item-label" for=
                           "entry_1094508028"></label>

                    <div class="ss-q-title">
                      <span class="ss-missing-item"> * </span>
                      <label class="ss-q-item-label" for=
                             "entry_1094508028">Does the story explain the causes of a problem?<label for="itemView.getDomIdToLabel()"></label></label>
                      <div class="questionMark button-style" myname="tmm1"/> Tell me more </div>
                    </div>

                    <div class="ss-q-help ss-secondary-text" dir="ltr">
                    </div>

                    <ul class="ss-choices">
                      <li class="ss-choice-item"><label><span class=
                                                              "ss-choice-item-control goog-inline-block"><input class="ss-q-radio"
                                                                                                                id="group_1897914240_1" name="entry.1897914240"
                                                                                                                required="" type="radio" value="No"></span>
                          <span class=
                                "ss-choice-label">No</span></label></li>

                      <li class="ss-choice-item"><label><span class=
                                                              "ss-choice-item-control goog-inline-block"><input class="ss-q-radio"
                                                                                                                id="group_1897914240_2" name="entry.1897914240"
                                                                                                                required="" type="radio" value="Somewhat"></span>
                          <span class=
                                "ss-choice-label">Somewhat</span></label></li>

                      <li class="ss-choice-item"><label><span class=
                                                              "ss-choice-item-control goog-inline-block"><input class="ss-q-radio"
                                                                                                                id="group_1897914240_3" name="entry.1897914240"
                                                                                                                required="" type="radio" value="Clearly"></span>
                          <span class=
                                "ss-choice-label">Clearly</span></label></li>
                    </ul>

                    <div class="error-message"></div>
                  </div>
                </div>
              </div>

              <div class="ss-form-question errorbox-good">
                <div class="ss-item ss-item-required ss-radio" dir="ltr">
                  <div class="ss-form-entry">
                    <label class="ss-q-item-label" for=
                           "entry_678625221"></label>

                    <div class="ss-q-title">
                      <span class="ss-missing-item"> * </span>
                      <label class="ss-q-item-label" for="entry_678625221">Does the story present an associated solution to that problem?
                        <label for= "itemView.getDomIdToLabel()"></label>
                      </label>
                      <div class="questionMark button-style" myname="tmm2"> Tell me more </div> 
                    </div>

                    <ul class="ss-choices">
                      <li class="ss-choice-item"><label><span class=                                                              "ss-choice-item-control goog-inline-block">
                            <input class="ss-q-radio" id="group_1841201727_1" name="entry.1841201727" required="" type="radio" value="No"></span>
                          <span class=
                                "ss-choice-label">No</span></label></li>

                      <li class="ss-choice-item"><label><span class=
                                                              "ss-choice-item-control goog-inline-block"><input class="ss-q-radio"
                                                                                                                id="group_1841201727_2" name="entry.1841201727"
                                                                                                                required="" type="radio" value="Somewhat"></span>
                          <span class=
                                "ss-choice-label">Somewhat</span></label></li>

                      <li class="ss-choice-item"><label><span class=                                                              "ss-choice-item-control goog-inline-block"><input class="ss-q-radio"
                                                                                                                id="group_1841201727_3" name="entry.1841201727"
                                                                                                                required="" type="radio" value="Clearly"></span>
                          <span class=                                "ss-choice-label">Clearly</span></label></li>
                    </ul>

                    <div class="error-message"></div>
                  </div>
                </div>
              </div>


              <div class="ss-form-question errorbox-good">
                <div class="ss-item ss-item-required ss-radio" dir="ltr">
                  <div class="ss-form-entry">
                    <label class="ss-q-item-label" for=
                           "entry_1391431169"></label>
                    <div class="ss-q-title">
                      <span class="ss-missing-item"> * </span>
                      <label class="ss-q-item-label" for=
                             "entry_1391431169">Does the story address the problem solving and how-to details of implementation? <label for="itemView.getDomIdToLabel()"></label> 
                      </label>
                      <div class="questionMark button-style" myname="tmm3"> Tell me more </div>
                    </div>

                    <ul class="ss-choices">
                      <li class="ss-choice-item"><label><span class=                                                              "ss-choice-item-control goog-inline-block"><input class="ss-q-radio"
                                                                                                                id="group_362919179_1" name="entry.362919179"
                                                                                                                required="" type="radio" value="No"></span>
                          <span class=                                "ss-choice-label">No</span></label></li>

                      <li class="ss-choice-item"><label><span class=                                                              "ss-choice-item-control goog-inline-block"><input class="ss-q-radio"
                                                                                                                id="group_362919179_2" name="entry.362919179"
                                                                                                                required="" type="radio" value="Somewhat"></span>
                          <span class=                                "ss-choice-label">Somewhat</span></label></li>

                      <li class="ss-choice-item"><label><span class=                                                              "ss-choice-item-control goog-inline-block"><input class="ss-q-radio"
                                                                                                                id="group_362919179_3" name="entry.362919179"
                                                                                                                required="" type="radio" value="Clearly"></span>
                          <span class=                                "ss-choice-label">Clearly</span></label></li>
                    </ul>

                    <div class="error-message"></div>
                  </div>
                </div>
              </div>
              
              <div class="ss-form-question errorbox-good">
                <div class="ss-item ss-item-required ss-radio" dir="ltr">
                  <div class="ss-form-entry">
                    <label class="ss-q-item-label" for=
                           "entry_1877404981"></label>

                    <div class="ss-q-title">
                      <span class="ss-missing-item"> * </span>
                      <label class="ss-q-item-label" for=
                             "entry_1877404981">Does the story present results, or indications of progress, linked to the solution? <label for=
                                                  "itemView.getDomIdToLabel()"></label> </label>
                      <div class="questionMark button-style" myname="tmm4"> Tell me more </div>
                    </div>

                    <div class="ss-q-help ss-secondary-text" dir="ltr">
                    </div>

                    <ul class="ss-choices">
                      <li class="ss-choice-item"><label><span class=                                                              "ss-choice-item-control goog-inline-block"><input class="ss-q-radio"
                                                                                                                id="group_117507810_1" name="entry.117507810"
                                                                                                                required="" type="radio" value="No"></span>
                          <span class=                                "ss-choice-label">No</span></label></li>

                      <li class="ss-choice-item"><label><span class=                                                              "ss-choice-item-control goog-inline-block"><input class="ss-q-radio"
                                                                                                                id="group_117507810_2" name="entry.117507810"
                                                                                                                required="" type="radio" value="Somewhat"></span>
                          <span class=                                "ss-choice-label">Somewhat</span></label></li>

                      <li class="ss-choice-item"><label><span class=                                                              "ss-choice-item-control goog-inline-block">
                            <input class="ss-q-radio" id="group_117507810_3" name="entry.117507810" required="" type="radio" value="Clearly"></span>
                          <span class=                                "ss-choice-label">Clearly</span></label></li>
                    </ul>

                    <div class="error-message"></div>
                  </div>
                </div>
              </div>

              <div class="ss-form-question errorbox-good">
                <div class="ss-item ss-item-required ss-radio" dir="ltr">
                  <div class="ss-form-entry">
                    <label class="ss-q-item-label" for=
                           "entry_1778185767"></label>

                    <div class="ss-q-title">
                      <span class="ss-missing-item"> * </span>
                      <label class="ss-q-item-label" for=
                             "entry_1778185767">Does the story convey an insight or teachable lesson?<label for=
                                                               "itemView.getDomIdToLabel()"></label></label>
                      <div class="questionMark button-style" myname="tmm5"> Tell me more </div>
                    </div>

                    <div class="ss-q-help ss-secondary-text" dir="ltr">
                    </div>

                    <ul class="ss-choices">
                      <li class="ss-choice-item"><label><span class= "ss-choice-item-control goog-inline-block"><input class="ss-q-radio"
                                                                                                                id="group_1540894643_1" name="entry.1540894643"
                                                                                                                required="" type="radio" value="No"></span>
                          <span class=                                "ss-choice-label">No</span></label></li>

                      <li class="ss-choice-item"><label><span class=                                                              "ss-choice-item-control goog-inline-block"><input class="ss-q-radio"
                                                                                                                id="group_1540894643_2" name="entry.1540894643"
                                                                                                                required="" type="radio" value="Somewhat"></span>
                          <span class=                                "ss-choice-label">Somewhat</span></label></li>

                      <li class="ss-choice-item"><label><span class=                                                              "ss-choice-item-control goog-inline-block"><input class="ss-q-radio"
                                                                                                                id="group_1540894643_3" name="entry.1540894643"
                                                                                                                required="" type="radio" value="Clearly"></span>
                          <span class=                                "ss-choice-label">Clearly</span></label></li>
                    </ul>

                    <div class="error-message"></div>
                  </div>
                </div>
              </div>


              <div class="ss-form-question errorbox-good">
                <div class="ss-item ss-text" dir="ltr">
                  <div class="ss-form-entry hidden-field">
                    <label class="ss-q-item-label" for=
                           "entry_842954229"></label>

                    <div class="ss-q-title">
                      <label class="ss-q-item-label" for=
                             "entry_842954229">article_url</label>
                    </div><label class="ss-q-item-label" for=
                                 "entry_842954229"></label>

                    <div class="ss-q-help ss-secondary-text" dir="ltr">
                      <label class="ss-q-item-label" for=
                             "entry_842954229"></label>
                    </div><input class="ss-q-short" dir="auto" id=
                                 "entry_842954229" name="entry.842954229" title="" type=
                                 "text" value="">

                    <div class="error-message"></div>
                  </div>
                </div>
              </div>

              <div class="ss-form-question errorbox-good">
                <div class="ss-item ss-text" dir="ltr">
                  <div class="ss-form-entry hidden-field">
                    <label class="ss-q-item-label" for=
                           "entry_2146594322"></label>

                    <div class="ss-q-title">
                      <label class="ss-q-item-label" for=
                             "entry_2146594322">article_content</label>
                    </div><label class="ss-q-item-label" for=
                                 "entry_2146594322"></label>

                    <div class="ss-q-help ss-secondary-text" dir="ltr">
                      <label class="ss-q-item-label" for=
                             "entry_2146594322"></label>
                    </div><input class="ss-q-short" dir="auto" id=
                                 "entry_2146594322" name="entry.2146594322" title=""
                                 type="text" value="">

                    <div class="error-message"></div>
                  </div>
                </div>
              </div>

              <div class="ss-form-question errorbox-good">
                <div class="ss-item ss-text" dir="ltr">
                  <div class="ss-form-entry hidden-field">
                    <label class="ss-q-item-label" for=
                           "entry_381671704"></label>

                    <div class="ss-q-title">
                      <label class="ss-q-item-label" for=
                             "entry_381671704">article_annotations</label>
                    </div><label class="ss-q-item-label" for=
                                 "entry_381671704"></label>

                    <div class="ss-q-help ss-secondary-text" dir="ltr">
                      <label class="ss-q-item-label" for=
                             "entry_381671704"></label>
                    </div><input class="ss-q-short" dir="auto" id=
                                 "entry_381671704" name="entry.381671704" title="" type=
                                 "text" value="">

                    <div class="error-message"></div>
                  </div>
                </div>
              </div>

              <div class="ss-form-question errorbox-good">
                <div class="ss-item ss-text" dir="ltr">
                  <div class="ss-form-entry hidden-field">
                    <label class="ss-q-item-label" for=
                           "entry_1787320211"></label>

                    <div class="ss-q-title">
                      <label class="ss-q-item-label" for=
                             "entry_1787320211">article_headline</label>
                    </div><label class="ss-q-item-label" for=
                                 "entry_1787320211"></label>

                    <div class="ss-q-help ss-secondary-text" dir="ltr">
                      <label class="ss-q-item-label" for=
                             "entry_1787320211"></label>
                    </div><input class="ss-q-short" dir="auto" id=
                                 "entry_1787320211" name="entry.1787320211" title=""
                                 type="text" value="">

                    <div class="error-message"></div>
                  </div>
                </div>
              </div><input name="draftResponse" type="hidden" value="[] ">
              <input name="pageHistory" type="hidden" value="0">

              <div class="ss-item ss-navigate">
                <table id="navigation-table">
                  <tbody>
                    <tr>
                      <td class="ss-form-entry goog-inline-block" dir=
                          "ltr" id="navigation-buttons">
                        
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </form>
          <div id="hintblock" class="toolTip">
            <div id="hintcontent"></div>
            <div id="hintclose">Close</div>
          </div>
        </div><!--   END OF GOOGLE FORM -->
        <div class="next-box">
          <button id="goto-tagging" class="next" type="button"> I've answered the questions. Bring me to the tagging tool. </button>
          <button id="ques-reset" class="reset" type="button"> Reset </button>
        </div>
      </div>
    </div><!--   END OF FORM Page -->
    
    <!-- Start of tag page -->
    <div id="tagpage" class="hidden-field page">
      <div class="prompt">
      <p>Please highlight and tag all the text related to problem, solutions, and results, if any, in the following article. You can tag as much or as little as you think appropriate.</p>
      <p>Just highlight a section of text you want to tag. A tagging menu will appear next to the highlighted text, allowing you to choose or cancel a tag.</p>
      </div>
      <div class="article-box tag-box" id="tagged-article">
        <div class="at-hl"> </div>
        <div class="at-ct" id="tag-content-container">  </div>
      </div>
      <div class="next-box">
        <button id="goto-review" class="next" type="button"> I'm done. </button>
        <button id="tag-reset" class="reset" type="button"> Reset </button>
      </div>
    </div>
    
    <!-- Start of review -->
    <div id="review" class="hidden-field page">
      Thank you for submitting your coding. Would you like to review it?
      <div class="next-box">
        <button id="rv-bt" type="button"> Yes. Please. </button>
        <button id="finish" type="button">  Submit my responses and analyze another article </button>
      </div>
      <div id="review-box">
         <div id="rv-at"> </div>
         <div id="rv-ques"> </div>
      </div>
    </div>
    </div> <!-- End of container -->
    <!-- Start of highlight bar -->
    <div id="highlightbar" class="hl0" style="opacity: 1; display: none; left: 35.5px; top: 156px;">
      <input id='problem' class="tagbut" name="tag" type="radio" value="problem" data-color="#FFCC00" /> 
      <strong id='problem-tag'>Problem</strong> <br/>
      <input id='solution' class="tagbut" name="tag" type="radio" value="solution" data-color="#00FFCC" /> 
      <strong id='solution-tag'>Solution</strong> <br/>
      <input id='result' class="tagbut" name="tag" type="radio" value="result" data-color="#D532FF" />
      <strong id='result-tag'>Result</strong>  <br/>
      <input id='remove' class="tagbut" name="tag" type="radio" value="remove" data-color="transparent" />
      <strong id=remove-tag'>Remove</strong>  <br/>
    </div>


  </body>
</html>
