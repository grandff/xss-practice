# XSS 실습
bitnami 기반으로 연습

## 공격 기법의 종류
1. 종류
DOM-BASED XSS / REFLECTED XSS / STORED XSS
동적 페이지 구성방법에 따라 공격 기법을 구분함

2. 경고창을 이용한 공격가능여부 점검
```js
alert(document.cookie);
```
> alert을 통해서 xss가 가능한지 점검함
> 직관적이여서 이렇게 할거임.. iframe 등등 다양한 방법이 있지만

3. DOM-BASED XSS 공격원리 분석 및 실습
/xss/example1.php 접속해서 실습
입력하는 keyword는 필터링이 되지 않고 client에 전달되고 있으므로 keyword를 통해 dom xss 공격 가능.
innerHTML은 script는 실행 안되게 되어있으나 다른 html 태그등을 통해 실행할 수 있음.
대표적으로 img 태그 사용.
```html
<img src="#" onerror="alert('hi');" />
```

> 위 코드를 통해 alert 실행 가능