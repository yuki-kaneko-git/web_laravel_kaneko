<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>社員登録画面</title>
</head>
<body>
    <div class="insert">
        <form method="Post" action="{{route('insertResult')}}" name="form">
        @csrf
            <table>
                <tr><th>社員ID*</th><td><input type="text" id="employee_id" placeholder="YZ12345678" maxlength="10" minlength="10" required pattern ="^YZ\d{8}$"></td></tr>
                <tr><th>社員名*</th>
                    <td>
                        <input type="text" id="family_name" placeholder="姓" maxlength="25" required>
                    </td>
                    <td>
                        <input type="text" id="first_name" placeholder="名" maxlength="25" required>
                    </td>
                </tr>
                <tr><th>所属セクション*</th>
                    <td>
                        <select id="section_id" required>
                            <option value="" hidden>選択してください</option>
                            <option value="1">シス開</option>
                            <option value="2">ビジソル</option>
                            <option value="3">グロカル</option>
                        </select> 
                    </td></tr>
                <tr><th>メールアドレス*</th><td><input type="text" id="mail" placeholder="taro_yaz@yaz.co.jp" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+$" maxlength="256" required></td></tr>
                <tr><th>性別*</th>
                    <td>
                        <label><input type="radio" name="gender" id="male" onchange="check_form()" value="1" required>男性</label>
                        <label><input type="radio" name="gender" id="female" onchange="check_form()" value="2" required>女性</label>
                    </td>
                </tr>
            </table>
            <p>*必須項目</p>
            <p></p>
            <input type="submit" name="submit" value="登録">
            <p></p>
            <a href="{{route('menu')}}">メニュー画面</a>
        </form>
        <script type="text/javascript">
            var //form = document.forms.form, 
                //submit = document.getElementByName('submit'),
                employee_id = document.getElementById('employee_id');
                family_name = document.getElementById('family_name');
                first_name = document.getElementById('first_name');
                section_id = document.getElementById('section_id');
                mail = document.getElementById('mail');
                male = document.getElementById('male');
                female = document.getElementById('female');

            employee_id.addEventListener('invalid', function(e) {
                if(employee_id.validity.valueMissing){
                    e.target.setCustomValidity("社員IDを入力してください"); 
                 } else if(employee_id.validity.tooLong || employee_id.validity.tooShort) {
                     e.target.setCustomValidity("社員IDは10文字で入力してください"); 
                 } else if(!employee_id.validity.valid) {
                     e.target.setCustomValidity("社員IDを正しく入力してください"); 
                 }
                employee_id.addEventListener('input', function(e){
                    e.target.setCustomValidity('');
                });
            }, false);
            family_name.addEventListener('invalid', function(e) {
                if(family_name.validity.valueMissing){
                    e.target.setCustomValidity("社員名（姓）を入力してください"); 
                } else if(family_name.validity.tooLong) {
                    e.target.setCustomValidity("社員名（姓）は25文字以内で入力してください"); 
                }
                family_name.addEventListener('input', function(e){
                    e.target.setCustomValidity('');
                });
            }, false);
            first_name.addEventListener('invalid', function(e) {
                if(first_name.validity.valueMissing){
                    e.target.setCustomValidity("社員名（名）を入力してください"); 
                } else if(family_name.validity.tooLong) {
                    e.target.setCustomValidity("社員名（名）は25文字以内で入力してください"); 
                }
                first_name.addEventListener('input', function(e){
                    e.target.setCustomValidity('');
                });
            }, false);
            section_id.addEventListener('invalid', function(e) {
                if(section_id.validity.valueMissing){
                    e.target.setCustomValidity("所属セクションを入力してください"); 
                }
                section_id.addEventListener('input', function(e){
                    e.target.setCustomValidity('');
                });
            }, false);
            mail.addEventListener('invalid', function(e) {
                if(mail.validity.valueMissing){
                    e.target.setCustomValidity("メールアドレスを入力してください"); 
                } else if(mail.validity.tooLong) {
                    e.target.setCustomValidity("メールアドレスは256文字以内で入力してください"); 
                } else if(!mail.validity.valid) {
                    e.target.setCustomValidity("メールアドレスを正しく入力してください"); 
                }
                mail.addEventListener('input', function(e){
                    e.target.setCustomValidity('');
                });
             }, false);
        </script>
    </div>
</body>
</html>