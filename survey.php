<html> 
  <head> 
    <title>Testing the Survey Application</title> 
  </head> 
  <body background="http://www.csubak.edu/Graphics/backgrnd.gif"> 
    <font color=#1346AD size=+3>Survey Application Test Form</font> 
    <hr> 
    <form name=Temp method=POST action="../index.php"> 
      <input type=hidden name=AUTONUMBER> 
      <input type=hidden name=FILETYPE value=TEXT> 
      <input type=hidden name=FIELDDELIM value=TAB> 
      <input type=hidden name=FILELOCATION value="/temp/survey.txt"> 
      <input type=hidden name=REDIRECT 
             value="http://www.cs.csubak.edu/~bkelley/testsurvey.html"> 
      <input type=hidden name=REDIRECTTIME value=4> 
      <input type=hidden name=FORMVARSTOFILE 
       value="/temp/b12.txt, textBox1, textBox2:/temp/b34.txt, textBox3, textBox4">

      Gender:<br> 
      <li><input type=radio name=Gender value=Male>Male<br> 
      <li><input type=radio name=Gender value=Female>Female<br> 
      <p> 
      Age Group:<br> 
      <li><input type=radio name=AgeGroup value=12to17>12 - 17<br> 
      <li><input type=radio name=AgeGroup value=18to25>18 - 25<br> 
      <li><input type=radio name=AgeGroup value=26to30>26 - 30<br> 
      <p> 
      Age Comments:<br> 
      <textarea cols=40 rows=3 name=textBox1></textarea> 
      <p> 
      Gender Comments:<br> 
      <textarea cols=40 rows=3 name=textBox2></textarea> 
      <p> 
      Survey Comments:<br> 
      <textarea cols=40 rows=3 name=textBox3></textarea> 
      <p> 
      Personal Comments:<br> 
      <textarea cols=40 rows=3 name=textBox4></textarea> 
      <hr> 
      <input type=submit value=Submit> <input type=reset value=Clear><br> 
    </form> 
  </body> 
</html>
