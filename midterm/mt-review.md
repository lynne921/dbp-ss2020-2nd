### 중간고사 회고록
#### 새로 배운 내용
+ 셀렉트 박스 내의 목록에 유동적으로 내용을 반영하는 법을 배웠다.
+ 캐글에서 데이터를 가져오는 방법을 배웠다.
+ mariadb와 php, html을 다루는 방법을 다시 배웠다.
+ 깃허브에 파일을 올리고 다운 받는 법을 배웠다.
+ mariadb의 각종 타입(number, text, varchar등)에 대해 배웠다.

#### 오류 내용
- 우분투 /var/lib/dpkg/lock-frontend 잠금 파일을 얻을 수 없습니다 (재부팅을 통해 해결)
- git pull/push 관련 오류 (local과 remote의 버전이 다르다..)
- MariaDB row size too large 오류 (varchar 사이즈는 참고로 인코딩 값에 따라 사이즈가 달라짐.)
- php undefined variable rows 오류 (오타로 인한 것이어서 다시 치고 해결)
- Column count doesn't match value count at row 오류 (컬럼의 조건과 count 값 개수가 일치하지 않음.)
- Select Box 선택 오류 (선택 값 제대로 가져오기)
그외 다수...


#### 참고 페이지들
0. https://www.kaggle.com/zynicide/wine-reviews?select=winemag-data_first150k.csv (캐글 와인 데이터)
1. https://gamtoggi.tistory.com/83 (git remote 버전과 로컬의 버전이 달라서 충돌 해결 방법)
2. https://jobc.tistory.com/177 (git pull push 오류 해결 방법)
3. https://app.konbert.com/ (csv -> sql 변경 사이트. 50MB 이하까지 변경 가능)
4. https://blog.dork94.com/82 (mariadb에서 sql 파일 실행)
5. https://stricky.tistory.com/297 (mariadb row size too large 오류 해결 방법1)
6. https://stackoverflow.com/questions/15585602/change-limit-for-mysql-row-size-too-large (mariadb row size too large 오류 해결 방법2)
7. https://mariadb.com/kb/en/varchar/ (varchar 관련 공식 문서. varchar 최대 사이즈 검색.)
8. https://stackoverflow.com/questions/48279854/how-to-fix-undefined-variable-rows-in-my-code (undefined variable rows 오류 해결)
9. https://needneo.tistory.com/5 (Column count doesn't match value count at row 오류 해결)
10. https://link2me.tistory.com/1386 (Select Box에서 선택 값 가져오기)
11. https://qastack.kr/programming/17139501/using-post-to-get-select-option-value-from-html  ($_POST를 사용하여 HTML에서 선택 옵션 값 가져 오기)
12. https://lehero.tistory.com/235 (셀렉트 박스 유동적 변경)

#### 회고
혼자서 하려니 엄청 어렵게 생각했다. 그러나 구글과 함께하니 훨씬 쉽게 끝났다! 수많은 오류가 나올 때마다 구글링을 열심히 하였고 slack 내에서 여러 qna도 많은 도움이 되었다.<br>
mariadb와 php 다루는 방법을 처음부터 다시 공부하여서 복습하는 기분으로 공부하였다. 다만 아쉬운 점은, 셀렉트 박스에서 선택한 후 원하는 페이지가 나올 때 셀렉트 박스가 초기화되어
 선택된 내용이 뜨지 않았다. 이걸 다시 개선한다면 선택된 내용으로 일시 고정시켜두고 싶다.
