"# File-Uploads" 
This project alwas the user to choose only an audio file.

If you have issues uploading a file
- Try to check the size of the file
    print_r($_FILES);

if you see this:-
 Array ( 
    [fileToupload] => Array (
       [name] => Asake_-_Muse_Audio_.mp3 
       [type] => 0 
       [error] => 3 
       [size] => 0 ) ) 

That means you have to change something from your LOCALHOST

for XAMPP
 Go to your Xampp folder > php > php.ini  
 Then open the file and search for "upload_max_filesize" and "post_max_size"
Then increase it to 50M 

After all this Restart your localhost and try again.


if you want to rename your uploaded file check out "https://github.com/kingdamie/rename-uploaded-file"
