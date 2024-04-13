Masuk ke direktori

cd /etc/nginx/sites-enabled
Copy file default menjadi app.sister.local

cp default app.sister.local
alt text

Edit file app.sister.local

sudo nano app.sister.local
alt text

Selanjutnya pindah direktori

dc /var/www/html
Copy file index.nginx-debian.html menjadi AppSister.html

cp index.nginx-debian.html AppSister.html
Edit file AppSister.html

sudo nano AppSister.html
alt text

Buka notepad run as administrator lalu buka file yang ada di partisi C:\Windows\System32\drivers\etc\hosts Tambahkan 127.0.0.1 sister.local alt text

Buka browser ketikkan app.sister.local alt text

Web server app.sister.local sudah selesai selanjutnya install microservice3,4,5,

Install Debian 10 untuk microservice 3,4 dan 5

sudo lxc-create -n microservice3 -t download -- --dist debian --release buster --arch amd64 --force-cache --server images.linuxcontainers.org
alt text

sudo lxc-create -n microservice4 -t download -- --dist debian --release buster --arch amd64 --force-cache --server images.linuxcontainers.org
alt text

sudo lxc-create -n microservice5 -t download -- --dist debian --release buster --arch amd64 --force-cache --server images.linuxcontainers.org
alt text

Jalankan ketiga microservice tersebut

sudo lxc-start -n microservice3
sudo lxc-start -n microservice4
sudo lxc-start -n microservice5
Cek apakah sudah jalan apa engga mengggunakan perintah

lxc-ls -f
alt text

Attach ke 3 microservice tadi

sudo lxc-attach -n microservice3
sudo lxc-attach -n microservice4
sudo lxc-attach -n microservice5
Install nano dan nginx di microservice 3,4,5

apt install nano
apt install nginx
Selanjutnya tambahkan di /etc/hosts pada microservice 3,4,5

sudo nano /etc/hosts
alt text alt text alt text

LOAD BALANCING
Selanjutnya konfigurasi hosts di parent untuk menambahkan ke3 ip microservice tadi
    sudo nano /etc/hosts
alt text
Selanjutnya pindah ke direktori /etc/nginx/sites-enabled
cd /etc/nginx/sites-enabled
Edit file nginx.conf
sudo nano ../nginx.conf
Tambahkan pada bagian logging settings
log_format logger-json escape-json '{"source": "nginx", "time": $msec, "resp_body_size": $body_bytes_sent, "host": "$http_host", "address": "$remote_addr", "request_length": $request_length, "method": "$request_method", "uri": "$request_uri", "status": $status, "user_agent": "$http_user_agent", "resp_time": $request_time, "upstream_addr": "$upstream_addr"}';
alt text
Selanjutnya edit File app.sister.local
sudo nano app.sister.local
alt text
Cek konfigurasi
nginx -t 
Reload
nginx -s reload
Untuk melihat bagaimana load balancing nya Ketikkan
 sudo tail -f /var/log/nginx/app.sister.local-access.log
Lalu Buka browser ketikkan app.sister.local dan lakukan refresh beberapa kali alt text Maka hasilnya begini alt text Bisa kita lihat pada upstream_addr setiap log nya dia dimulai berurut dari microservice3, microservice4, microservice5.
