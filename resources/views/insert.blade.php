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
                <tr><th>社員ID*</th><td><input type="text" class="required length employee_id" name="employee_id" placeholder="YZ12345678" pattern="^YZ\d{8}$"></td></tr>
                <tr><th>社員名*</th>
                    <td>
                        <input type="text" class="required maxlength" data-maxlength="25" name="family_name" placeholder="姓">
                    </td>
                    <td>
                        <input type="text" class="required maxlength" data-maxlength="25" name="first_name" placeholder="名">
                    </td>
                </tr>
                <tr><th>所属セクション*</th>
                    <td>
                        <select name="section_id" class="required">
                            <option hidden>選択してください</option>
                            <option value="1">シス開</option>
                            <option value="2">ビジソル</option>
                            <option value="3">グロカル</option>
                        </select> 
                    </td></tr>
                <tr><th>メールアドレス*</th><td><input type="text" name="mail" class="required maxlength mail" data-maxlength="256" placeholder="taro_yaz@yaz.co.jp" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+$"></td></tr>
                <tr><th>性別*</th>
                    <td>
                        <label><input type="radio" name="gender_id" class="gende_id" value="1" required>男性</label>
                        <label><input type="radio" name="gender_id" class="gende_id" value="2" required>女性</label>
                    </td>
                </tr>
            </table>
            <p>*必須項目</p>
            <p></p>
            <input type="submit" value="登録">
            <p></p>
            <a href="{{route('menu')}}">メニュー画面</a>
        </form>
    </div>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', () => {
            const validationForm = document.querySelectorAll('.validationForm');
            if(validationForm) {
                const errorClassName = 'error';
                const requiredElems = document.querySelectorAll(' .required');
                const employeeIdElems = document.querySelectorAll(' .employee_Id');
                const familyNameElems = document.querySelectorAll(' .family_name');
                const firstNameElems = document.querySelectorAll(' .first_name');
                const sectionIdElems = document.querySelectorAll(' .section_id');
                const mailElems = document.querySelectorAll(' .mail');
                const genderIdElems = document.querySelectorAll(' .gender_id');

                const createEror = (elem, errorMessage) => {
                    const errorSpan = document.createElement('span');
                    errorSpan.classList.add(errorClassName);
                    errorSpan.setAttribute('aria-live', 'polite');
                    errorSpan.textContent = errorMessage;
                    elem.parentNode.appendChild(errorSpan);
                }

                validationForm.addEventListener('sybmit', (e) => {
                    const errorElems = validationForm.querySelectorAll('.' + errorClassName);
                    errorElems.forEach( (elem) => {
                        elem.move();
                    })

                    requiredElems.forEach( (elem) => {
                        const elemValue = elem.value.trim();
                        if(elemValue.length === 0) {
                            createEror(elem, '入力は必須です');
                            e.preventDefault();
                        }
                    })



                    
                })

            }
        })
    </script>
</body>
</html>