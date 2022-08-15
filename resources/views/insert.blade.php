<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>社員登録画面</title>
    <script type="text/javascript">
        function check(){
            if(check.id.value == ""){
                alert("社員IDを入力してください");
                return false;
            }else if(check.id.value == {10}){
                alert("社員IDは10文字で入力してください");
                return false;
            }else if(check.id.value == ^YZ\d$){
                alert("社員IDを正しく入力してください");
                return false;
            }

        }
    </script>
</head>
<body>
    <div class="insert">
        <form method="" action="" name="check">
            <table>
                <tr><th>社員ID*</th><td><input type="text" placeholder="YZ12345678" pattern="^YZ\d{8}$" name="id" required></td></tr>
                <tr><th>社員名*</th>
                    <td>
                        <input type="text" placeholder="姓" maxlength="25" name="lastNm" required>
                    </td>
                    <td>
                        <input type="text" placeholder="名" maxlength="25" name="firstNm" required>
                    </td>
                </tr>
                <tr><th>所属セクション*</th>
                    <td>
                        <select name="section" name="section" required>
                            <option hidden>選択してください</option>
                            <option value="シス開">シス開</option>
                            <option value="グロカル">グロカル</option>
                            <option value="ビジソル">ビジソル</option>
                        </select> 
                    </td></tr>
                <tr><th>メールアドレス*</th><td><input type="text" placeholder="taro_yaz@yaz.co.jp" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+$" maxlength="256" name="mail" required></td></tr>
                <tr><th>性別*</th>
                    <td>
                        <label><input type="radio" name="gender" required>男性</label>
                        <label><input type="radio" name="gender" required>女性</label>
                    </td>
                </tr>
            </table>
            <p>*必須項目</p>
            <p></p>
            <input type="submit" value="登録" onclick="return check()">
            <p></p>
            <a href="{{route('menu')}}">メニュー画面</a>
        </form>
    </div>
</body>
</html>