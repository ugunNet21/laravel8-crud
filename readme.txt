update pembuatan:

1. membuat file
2. membuat membuat controller 
3. membuat tabel di controller
4. membuat database
5. upload table controller ke database 
6. mengatur route controller 
7. membuat file blade php 
8. membuat form input
9. membuat form tampil
10. membuat model = php artisan make:model M_Mahasiswa 
11. membuat controller = php artisan make:controller MahasiswaController --resource



update durasi:
1. menit ke 17:31
2. 39.52
3. 40.00 membuat view data


Ket eror:
- Symfony \ Component \ HttpKernel \ Exception \ MethodNotAllowedHttpException The GET method is not supported for this route. Supported methods: POST.
solusi: ganti get / post di web route
- SQLSTATE[42S22]: Column not found: 1054 Unknown column 'submit' in 'field list' (SQL: insert into `mahasiswa` (`nama`, `nim`, `alamat`, `submit`) values (we, 2323, dfd, ?))
solusi: hapus name="submit" pada button submit , cukup menggunakan type="submit"
- eror input value di text area {{ $data->alamat }}
harus gini: <textarea name="alamat" class="form-control" placeholder="bandung">{{ $data->alamat }}
-

bahan:
https://getbootstrap.com/
https://id-laravel.com/post/mengenal-eloquent-variable-spesial/#:~:text=Variable%20%24fillable%20berguna%20untuk%20mendaftarkan,insert%20atau%20update%20ke%20database.
https://laracasts.com/discuss/channels/laravel/call-to-undefined-method-appplanfindorfail
