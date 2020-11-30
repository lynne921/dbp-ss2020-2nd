##### 영상 주소 : 

### 1. 배운 내용
- Oracle DB와 JSP를 연동
- JSP를 활용하여 추가, 중복 제거 수행

### 2. 발생한 문제 & 해결 과정
![image](https://user-images.githubusercontent.com/53607089/100616125-f9262800-335b-11eb-986d-343db0314681.png)

+ 오라클 DB 연결 테스트 과정 중 Ping Failed (ORA-28040: 일치하는 인증 프로토콜 없음, No matching authentication protocol) 발생
: 구글링 결과 해당 문제는 ojdbc14.jar 를 사용하는데, Oracle 11g 에서 Oracle 12c 로 업데이트 하였을 경우 발생


해결 방법 : 1.ojdbc 를 ojdbc5 이상으로 변경하거나, 2.오라클에 최소 허용 로그인 버젼 파라메터를 추가
1. ![image](https://user-images.githubusercontent.com/53607089/100616222-1e1a9b00-335c-11eb-93d5-354ce12ec698.png)
2. ![image](https://user-images.githubusercontent.com/53607089/100616263-2bd02080-335c-11eb-8d14-849e1666a97e.png)


근데 해결이 안된다..
Oracle SQL 설정 : 


![image](https://user-images.githubusercontent.com/53607089/100616466-7a7dba80-335c-11eb-84da-309c074193c7.png)


eclipse 내 설정 :


![image](https://user-images.githubusercontent.com/53607089/100616538-92553e80-335c-11eb-9f5a-f149a4d91471.png)


### 3. 참고한 문서
- https://hanee24.github.io/2017/12/21/how-to-upload-image-with-github-readme/ : 깃허브에 사진 업로드하기
- https://aljjabaegi.tistory.com/379 : 오라클 DB 연결 중 인증 프로토콜 문제 발생

### 4. 회고
- 분명히 영상에 나온 그대로 따라하고 구글링 한 방법들을 다 적용해보았는데 왜 안되는지 모르겠다... 이번주차는 싹 다 다시 설치하고 초기화 해보았지만 안되는 걸로 보아 
설마 저번 주차에 잘못 따라해 생긴 문제인가 싶다..
