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
- MSPCTF{Congratz_y0u_pass3d_pr3g_match} -> sql2
- MSPCTF{AW350m3_y0u_H4ck3d_My_D4tb4se!!!} -> sql3




sql query {sql1,sql2}
create user 'mostafa'@'localhost' identified by 'password';
create database phptest;
use phptest;
create table users (id int, username varchar(100), password varchar(100));
insert into users values(1,'admin','adminpass');
insert into users values(2,'bob','pass');
GRANT ALL privileges ON phptest.* TO 'mostafa'@'localhost' IDENTIFIED BY 'password'; 
OR
GRANT ALL ON phptest.* TO 'mostafa'@'localhost';

sql query {sql3}
create user 'mostafa'@'localhost' identified by 'password';
create database newdatabase;
create table users (username varchar(100), role varchar(100));
insert into users values('admin','power admin');
insert into users values('amr','admin');
insert into users values('kandeel','admin');
insert into users values('abuelnour','admin');
insert into users values('aisha','admin');
insert into users values('anas','admin');
continue members of msp------------------
create table fLaG (MSPFLAG varchar(100));
insert into fLaG values('MSPCTF{AW350m3_y0u_H4ck3d_My_D4tb4se!!!}');
