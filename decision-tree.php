<div id="content">
<div id="questions"><div id="q1"><div id="q2733_wrapper" class="sq_question_wrapper">Have you heard of Responsive Design before? <br /> <ul><li><input type="radio" name="Have you heard of Responsive Design before?" value="Yes" id="q2733"  onclick="get_next_step(this.value,2733) " class="sq-form-field" /><label  for="q2733">Yes</label></li><li><input type="radio" name="Have you heard of Responsive Design before?" value="No" id="q2733_1"  onclick="get_next_step(this.value,2733) " class="sq-form-field" /><label  for="q2733_1">No</label></li></ul></div><div id="q2"></div></div></div>
<script type="text/javascript">

      var accum_points=new Array();
      var curr_id = 1;

      function get_next_step(answer, question)
      {

        if (document.getElementById("q"+question).type == 'text'){
          var result = decision_tree_validate_numeric(answer);
          if (result == null) {
            alert ('You must enter a numeric answer');
            return;
          }
        }

          //extract the question number from the wrapper DIV so we can know where to place next question
        var q_element = document.getElementById("q"+question+"_wrapper");
        var req_div = q_element.parentNode;
        curr_id = req_div.id;
        curr_id = curr_id.substring(1);
        curr_id = parseInt(curr_id);

        try
        {
          xmlHttp=new XMLHttpRequest();
        }
        catch(e)
        {
          try
          {
            xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
          catch(e)
          {
            alert ("Your browser does not support XMLHTTP!");
            return;
          }
        }

        var points = calculate_points(question);
        var url = "http://alpha.responsivedesign.is/getting-started-with-rwd";

        xmlHttp.onreadystatechange = question_state_changed;
        url=url+'?a_id='+answer+'&q_id='+question+'&pts='+points;
        xmlHttp.open("GET", url, true);
        xmlHttp.send(null);
      }

      function question_state_changed()
      {
        if (xmlHttp.readyState==4 && xmlHttp.status==200)
        {
          var q_no = curr_id;
          q_no++;

          var nextdiv = document.getElementById("q"+q_no);
          var response = xmlHttp.responseText;
          nextdiv.innerHTML=response;

          //create another question DIV after this one ready to store the next answer.
          q_no++;
          var divIdName = "q"+q_no;
          var newdiv = document.createElement('div');
          newdiv.setAttribute("id",divIdName);
          nextdiv.appendChild(newdiv);
        }
      }

      function calculate_points(question)
      {
        var points = 0;
        var q_no = curr_id;

        var points_element = document.getElementById("q"+question+"_points");
        var point_val = 0;
        if (points_element != null) point_val = points_element.value;
        accum_points[q_no] = parseFloat(point_val);


        for (var i = 1; i <= q_no; i++) {
          points = points + accum_points[i];
        }

        return points;
      }

      function reset_questions()
      {
        get_next_step("EMPTY", 2733);
        var first_q = document.getElementById("q2733");
        if (first_q.type == "radio") {
          var radio_boxes = document.getElementsByName(first_q.name);
          for (var e = 0; e < radio_boxes.length; e++) {
            if (radio_boxes[e].type == "radio") {
              radio_boxes[e].checked = false;
            }
          }
        } else if (first_q.type == "select-one") {
          first_q.selectedIndex = "EMPTY";
        } else if (first_q.type == "text") {
          first_q.value = "";
        }
      }

      function decision_tree_validate_numeric(answer)
      {
        answer.replace(/,/, "");
        return answer.match(/(^$)|(^[-+]?\d*\.?\d+$)/);

      }

    </script>
     <br /> <input type="reset" name="qReset" value="Reset"  onclick="reset_questions() " class="sq-form-field" id="qReset" />

   </div>