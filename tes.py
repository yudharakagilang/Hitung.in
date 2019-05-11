import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="",
  database="hitungin"
)

mycursor = mydb.cursor()



sql = "INSERT INTO  (value date, tiem) VALUES (%s, %s, %s)"
val = ("John", "Highway 21")
mycursor.execute(sql, val)

mydb.commit()

print(mycursor.rowcount, "record inserted.")