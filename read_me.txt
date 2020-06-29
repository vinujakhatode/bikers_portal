1)Go to C:\xampp\php and open the php.ini file.
Find [mail function] by pressing ctrl + f.
Search and pass the following values:
SMTP=smtp.gmail.com
smtp_port=587
sendmail_from = sawarirental@gmail.com
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"


2)Now, go to C:\xampp\sendmail and open the sendmail.ini file.

Find [sendmail] by pressing ctrl + f.
Search and pass the following values
smtp_server=smtp.gmail.com
smtp_port=587 or 25 //use any of them
error_logfile=error.log
debug_logfile=debug.log
auth_username=sawarirental@gmail.com
auth_password=sawari@626365
force_sender=sawarirental@gmail.com

3)Save both files.
stop the xampp server.Again restrat the xampp. Internet connection is required.
try to run the code. and check mail is sent or not. 

4)If mail is not sent then change 
smtp_port=465
sendmail_path = "C:\xampp\sendmail\sendmail.exe -t"

smtp_ssl=auto to smtp_ssl=ssl(sendmail.ini)
Again restart the xampp server.
