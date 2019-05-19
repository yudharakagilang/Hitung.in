#Hitung.IN website

Pada website akan ditampilakn hasil streaming dan juga grafik realtime. Grafik ini dihasilkan oleh sebuah aplikasi analytik yang berjalan pada local server yang bernama grafana. Untuk itu perlu dilakuakn penginstallan terlebih dahualu.

Grafana dapat didapatkan di link dibawah:
https://grafana.com/grafana/download

Adapun agar dapat berjalan, maka dapat dilakukan dengan mengikuti langkah berikut

#STEP 1 : import database hitung.in di mySQL
1. Buat database dengan nama hitungin
2. import database yang ada pada repository

#STEP 2 : Instalasi grafana
1. Instalasi grafana
2. Pada grafana bagian data source , masukan databse Hitingin.
3. Pada bagian min time interval : set menjadi 1 s
4. Pada bagian create, import file Json yang berada pada repository

#STEP 3 : WEB
1. Buka Web dan sistem dapat berjalan




* username dan password = admin
