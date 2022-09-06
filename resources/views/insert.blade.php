<?php
    // $employee_id = "";
    // $family_name = "";
    // $first_name = "";
    // $section_id = "";
    // $mail = "";
    // $gender_id = "";

    // $employee_id = $_POST['employee_id'];
    // $family_name = $_POST['family_name'];
    // $first_name = $_POST['first_name'];
    // $section_id = $_POST['section_id'];
    // $mail = $_POST['mail'];
    // $gender_id = $_POST['gender_id'];


    // $pdo = new PDO('pgsql:dbname=company_directory;options=\'--client_encoding=UTF8\';host=localhost', 'homestead', 'secret');

    // $stmt = $pdo->prepare("INSERT INTO employee (employee_id, family_name, first_name, section_id, mail, gender_id) VALUES (:employee_id, :family_name, :first_name, :section_id, :mail, :gender_id)");
    // $stmt->bindParam(':employee_id', $employee_id, PDO::PARAM_STR);
    // $stmt->bindParam(':family_name', $family_name, PDO::PARAM_STR);
    // $stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
    // $stmt->bindParam(':section_id', $section_id, PDO::PARAM_STR);
    // $stmt->bindParam(':mail', $mail, PDO::PARAM_STR);
    // $stmt->bindParam(':gender_id', $gender_id, PDO::PARAM_STR);

    // $result = $stmt->execute();
    // $pdo = null;


    // if($employee_id == "") {
    //     $err .= "社員IDを入力してください";
    // } else if(mb_strlen($employee_id) !== 10) {
    //     $err .= "社員IDは10文字で入力してください";
    // // } else if() {
    // //     $err .= "入力した社員IDはすでに登録されています";
    // // } else if(!preg_match("^YZ\d{8}$", $employee_id)) {
    //     $err .= "社員IDを正しく入力してください";
    // }
?> 


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
        <form method="Post" action="{{route('insertResult')}}">
        @csrf
            <table>
                <tr><th>社員ID*</th><td><input type="text" name="employee_id" id="employee" placeholder="YZ12345678" minlength="10" required pattern="^YZ\d{8}$"></td></tr>
                <tr><th>社員名*</th>
                    <td>
                        <input type="text" name="family_name" id="familyNm" placeholder="姓" required pattern="^.{0,25}$">
                    </td>
                    <td>
                        <input type="text" name="first_name" id="firstNm" placeholder="名" required pattern="^.{0,25}$">
                    </td>
                </tr>
                <tr><th>所属セクション*</th>
                    <td>
                        <select name="section_id" id="section" required>
                            <option value="" hidden>選択してください</option>
                            <option value="1">シス開</option>
                            <option value="2">ビジソル</option>
                            <option value="3">グロカル</option>
                        </select> 
                    </td></tr>
                <tr><th>メールアドレス*</th><td><input type="text" name="mail" id="mail_address" placeholder="taro_yaz@yaz.co.jp" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+$" required></td></tr>
                <tr><th>性別*</th>
                    <td>
                        <label><input type="radio" name="gender_id" class="gender" id="male" value="1" required>男性</label>
                        <label><input type="radio" name="gender_id" class="gender" id="female" value="2" required>女性</label>
                    </td>
                </tr>
            </table>
            <p>*必須項目</p>
            <p></p>
            <input type="submit" value="登録">
            <p></p>
            <a href="{{route('menu')}}">メニュー画面</a>
        </form>
        <script type="text/javascript">
            var //form = document.forms.form, 
                //submit = document.getElementByName('submit'),
                employee_id = document.getElementById('employee');
                family_name = document.getElementById('familyNm');
                first_name = document.getElementById('firstNm');
                section_id = document.getElementById('section');
                mail = document.getElementById('mail_address');
                male = document.getElementById('male');
                female = document.getElementById('female');
                //gender = document.getElementByClassName('gender');

            employee_id.addEventListener('invalid', function(e) {
                console.log(employee_id.value);
                if(employee_id.validity.valueMissing){
                    e.target.setCustomValidity("社員IDを入力してください"); 
                 } else if(employee_id.value.length > 25 || employee_id.validity.tooShort) {
                     e.target.setCustomValidity("社員IDは10文字で入力してください"); 
                 } else if(!employee_id.validity.valid) {
                     e.target.setCustomValidity("社員IDを正しく入力してください"); 
                 }
                employee_id.addEventListener('input', function(e){
                    e.target.setCustomValidity('');
                });
            }, false);
            family_name.addEventListener('invalid', function(e) {
                console.log(family_name.value);
                if(family_name.validity.valueMissing){
                    e.target.setCustomValidity("社員名（姓）を入力してください"); 
                } else if(family_name.value.length > 25) {
                    e.target.setCustomValidity("社員名（姓）は25文字以内で入力してください"); 
                }
                family_name.addEventListener('input', function(e){
                    e.target.setCustomValidity('');
                });
            }, false);
            first_name.addEventListener('invalid', function(e) {
                if(first_name.validity.valueMissing){
                    e.target.setCustomValidity("社員名（名）を入力してください"); 
                } else if(family_name.value.length > 25) {
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
                } else if(mail.value.length > 10) {
                    e.target.setCustomValidity("メールアドレスは256文字以内で入力してください"); 
                } else if(!mail.validity.valid) {
                    e.target.setCustomValidity("メールアドレスを正しく入力してください"); 
                }
                mail.addEventListener('input', function(e){
                    e.target.setCustomValidity('');
                });
            }, false);

            document.querySelectorAll('.gender').forEach(function(gender){
                gender.addEventListener('invalid', function(e){
                    e.target.setCustomValidity(''); 
                    if(male.validity.valueMissing && female.validity.valueMissing){
                        e.target.setCustomValidity("性別を入力してください"); 
                    }
                }, false);
            });
            
        </script>
    </div>
</body>
</html>