# 既存のWordpressに任意のテーブルを作って中身を表示する

## 使用例
https://yasumelt.net/scoreboard/

## 手順
1. なにはともあれテーブル追加．テーブル名に「wp_」をつけるのを忘れずに．
2. wp/wp-includes/wp-db.php 内，tables変数に「wp_」_を省略して追記．
3. WPダッシュボードで固定ページを追加する．
4. 固定ページで使用しているテンプレートファイル内（page.php）にscore.phpの内容を適宜変更して追記．
5. 完成！

## 今回使用したデータベース
```sql
CREATE TABLE wp_score
(
  id int PRIMARY KEY ,
  name varchar(30) not null,
  score int not null
);
```

| id | name | score |
----|----|----
| 1 | sakamoto | 10 |
| 2 | yasu | 20 |
| 3 | ああああ | 99 |
