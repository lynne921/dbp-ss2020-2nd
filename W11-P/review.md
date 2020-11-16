##### 영상 주소 : https://youtu.be/5hw2EQ2azJk

### 1. 배운 내용
- Oracle DB와 자바를 연동하여 사용
- 자바를 활용하여 Select, Update, Insert, Delete sql문 수행
- Transaction, Rollback, Commit sql
- rowrum = 1 일때만 출력되는 이유 : 
만약 rowrum=2라면? where 조건에 rownum = 2를 제외한 다른 조건이 없다. 첫번째 rownum 은 1이므로 버려진다. 그러면 두번째 rownum 역시 1이 되므로 버려진다. 반복하면 rownum은 1을 넘지 못한다.

### 2. 발생한 문제 & 해결 과정
+ 이클립스 다운로더가 아닌 개별 설치 후 뜬 오류 : JVM is not suitable for this product. -> https://mindolsj-dev.tistory.com/3 링크를 참고하여 오류 해결.
교수님이 해결하신 방향과 유사하다고 생각한다.

### 3. 참고한 문서
- https://mindolsj-dev.tistory.com/3 : JVM is not suitable for this product
- https://m.blog.naver.com/PostView.nhn?blogId=roropoly1&logNo=221219162711&categoryNo=91&proxyReferer=https:%2F%2Fwww.google.com%2F (rowrum = 1이 아니면 내용이 select 안되는 이유를 적은 문서)

### 4. 회고
자바를 통해 SQL문을 다루면서 다양한 사용법을 배웠다. 자바에 익숙하다 생각해 편하게 들었지만, 과제 출력 때 rownum=1 만 되므로 내가 삽입한 IT_TL이 제대로 나오지 않아 답답했다. 검색한 결과 위의 이유로 되질 않기 때문에,
IT_TL이 선택되려면 맨 마지막 JOB ID를 가져야 한다는 걸 알았다. 그래서 IT_TL 대신 VT_TL로 변경하여 원하는 대로 출력하였다.
