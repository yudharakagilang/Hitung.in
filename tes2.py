
from datetime import datetime

import mysql.connector
mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="",
  database="hitungin"
)

mycursor = mydb.cursor()

# time with sec
now= datetime.time(datetime.now())


#date
date=datetime.date(datetime.now())
# time without sec
time_without_sec = now.replace(microsecond=0)  

# To print:
print(time_without_sec)
print(date)
value=1


sql = "INSERT INTO record (value, date, time) VALUES (%s,%s,%s)"
val = (value,date,time_without_sec)
mycursor.execute(sql, val)

mydb.commit()

print(mycursor.rowcount, "record inserted.")



<script type="text/javascript"
    src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

<script>
 $(function() {

//This setTimeout function execute or call automatically when 5 second completed.


setInterval(function() {
  $("#aw").load(" #aw");
}, 1000);
});
</script>


