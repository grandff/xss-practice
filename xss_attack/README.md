# 세션 하이재킹 웹어플리케이션 실습

1. 테이블 생성
> mysql -u root
> create database xss_attack;
> use xss_attack;
>
> create table session_list(date date, ip varchar(15), session varchar(50));
>
> desc session_list;
>
> select * from session_list;

2. session.php 추가
- data parameter를 통해 세션 정보를 탈취해서 db에 저장

