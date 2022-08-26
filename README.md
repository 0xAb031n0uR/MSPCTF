# MSPCTF

msp ctf ainshams 2022
flags

- MSPCTF{CoNgR3Ts!\_Y0u_goT_ThE_Fl3g} -> CTF1
- MSPCTF{CoNgR3Ts!\_Y0u_H3CkEd_Adm!n_ACc0unT} -> ctf 2
- MSPCTF{c0n6r475_y0u_byp4553d_7h3_f1l73r} -> ctf 3 
- MSPCTF{t0m_M4rv0l0_r1ddl3} -> ctf 4
- MSPCTF{d3v3l0p3r_t00l5_4r3_fun} -> ctf 5
- MSPCTF{Exp0n3nt_1s_4lth0ugh_num3r1c} -> ctf 6
- MSPCTF{MD5-IS-A-ONE-W4Y} -> ctf 7
- MSPCTF{0n1On_L4y3R} -> ctf8 py file
- MSPCTF{SHARKS_CAN_SNIFF} -> ctf8 pcap file
- MSPCTF{4dm1n_473_7h3_c00k135} -> ctf9
- MSPCTF{SQL1_1S_S0_D4MN_FUN} -> sql1




sql query {sql1}
create user 'mostafa'@'localhost' identified by 'password';
create database phptest;
use phptest;
create table users (id int, username varchar(100), password varchar(100));
insert into users values(1,'bob','pass');
insert into users values(2,'admin','adminpass');
GRANT ALL privileges ON phptest.* TO 'mostafa'@'localhost' IDENTIFIED BY 'password';
mysql> GRANT ALL ON phptest.* TO 'mostafa'@'localhost';