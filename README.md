## Tugas 2 Load Balancing dengan Round Robin
# Membuat app.sister.local
- Copy file default menjadi app.sister.local
    ```sh
    cp default app.sister.local
    ```
    ![image](https://github.com/RayhanFurqoni/Website/assets/124054176/2faa0685-f535-4b28-a64a-21dd8ab2fcc5)

- Edit file app.sister.local
    ```sh
    sudo nano app.sister.local
    ```
    ![image](https://github.com/RayhanFurqoni/Website/assets/124054176/6454e6e1-83db-4232-8eba-c559426bde7e)

- Copy file index.nginx-debian.html menjadi AppSister.html
    ```sh
    sudo cp index.nginx-debian.html AppSister.html
    ```
- Edit file AppSister.html
    ```sh
    sudo nano AppSister.html
    ```
    ![image](https://github.com/RayhanFurqoni/Website/assets/124054176/2c93f022-337c-475d-a0b8-90af6f65cfe1)

- Buka notepad run as administrator lalu buka file yang ada di partisi C:\Windows\System32\drivers\etc\hosts Tambahkan 127.0.0.1 sister.local
![image](https://github.com/RayhanFurqoni/Website/assets/124054176/6c5c1df9-4291-4b11-8bb0-37648233708e)


- Buka browser ketikkan app.sister.local
![image](https://github.com/RayhanFurqoni/Website/assets/124054176/2428fea9-0d25-4eab-a9d4-f6ad88daea6c)


Web server app.sister.local sudah selesai selanjutnya install microservice3,4,5,
-  Install Debian 10 untuk microservice 3,4 dan 5
    ```sh
    sudo lxc-create -n microservice3 -t download -- --dist debian --release buster --arch amd64 --force-cache --server images.linuxcontainers.org
    ```
    ![image](https://github.com/RayhanFurqoni/Website/assets/124054176/c81b80e1-e123-4089-8fb2-7737d757bdc8)

    ```sh
    sudo lxc-create -n microservice4 -t download -- --dist debian --release buster --arch amd64 --force-cache --server images.linuxcontainers.org
    ```
    ```sh
    sudo lxc-create -n microservice5 -t download -- --dist debian --release buster --arch amd64 --force-cache --server images.linuxcontainers.org
    ```
    ![image](https://github.com/RayhanFurqoni/Website/assets/124054176/d0a86bf9-580d-484e-935e-686ef1700140)


- Jalankan ketiga microservice tersebut
    ```sh
    sudo lxc-start -n microservice3
    ```
    ```sh
    sudo lxc-start -n microservice4
    ```    
    ```sh
    sudo lxc-start -n microservice5
    ```    
-  Cek apakah sudah jalan apa engga mengggunakan perintah 
    ```sh
    lxc-ls -f
    ```
    ![image](https://github.com/RayhanFurqoni/Website/assets/124054176/7c671582-1b8c-49a8-96ad-6f67b309705c)

- Attach ke 3 microservice tadi 
    ```sh
    sudo lxc-attach -n microservice3
    ```
    ```sh
    sudo lxc-attach -n microservice4
    ```
    ```sh
    sudo lxc-attach -n microservice5
    ```
- Install nano dan nginx di microservice 3,4,5
    ```sh
    apt install nano
    ```
    ```sh
    apt install nginx
    ```
- Selanjutnya tambahkan di /etc/hosts pada microservice 3,4,5
    ```sh
    sudo nano /etc/hosts
    ```
    ![image](https://github.com/RayhanFurqoni/Website/assets/124054176/7bc752c8-3306-4f57-aa85-7fe253870f1d)
    ![image](https://github.com/RayhanFurqoni/Website/assets/124054176/31b67863-561a-4d36-9eac-c103833100b2)
    ![image](https://github.com/RayhanFurqoni/Website/assets/124054176/46692ac5-06d9-4240-b217-89e5559f06d8)

    
## LOAD BALANCING
- Selanjutnya konfigurasi hosts di parent untuk menambahkan ke3 ip microservice tadi
    ```sh
        sudo nano /etc/hosts
    ```
    ![image](https://github.com/RayhanFurqoni/Website/assets/124054176/4024d9b0-3b4f-4c25-9ec8-317c85e7c438)

- Selanjutnya pindah ke direktori /etc/nginx/sites-enabled
    ```sh
    cd /etc/nginx/sites-enabled
    ```
- Edit file nginx.conf
    ```sh
    sudo nano ../nginx.conf
    ```
    Tambahkan pada bagian logging settings
    ```sh
    log_format logger-json escape-json '{"source": "nginx", "time": $msec, "resp_body_size": $body_bytes_sent, "host": "$http_host", "address": "$remote_addr", "request_length": $request_length, "method": "$request_method", "uri": "$request_uri", "status": $status, "user_agent": "$http_user_agent", "resp_time": $request_time, "upstream_addr": "$upstream_addr"}';
    ```
    ![image](https://github.com/RayhanFurqoni/Website/assets/124054176/d19ba309-26f9-471b-a63c-e84f9bbe83c4)


- Selanjutnya edit File app.sister.local
    ```sh
    sudo nano app.sister.local
    ```
    ![image](https://github.com/RayhanFurqoni/Website/assets/124054176/ef207622-cbbd-4144-b67f-0d2b3e624ed3)

- Cek konfigurasi
    ```sh
    nginx -t 
    ```    
- Reload
    ```sh
    nginx -s reload
    ```
- Untuk melihat bagaimana load balancing nya 
    Ketikkan 
    ```sh
     sudo tail -f /var/log/nginx/app.sister.local-access.log
    ```
    Lalu Buka browser ketikkan app.sister.local dan lakukan refresh beberapa kali
    ![image](https://github.com/RayhanFurqoni/Website/assets/124054176/68af3b7e-f17e-48b0-b17d-dd5914502abf)


 
    
    
    
    
    
