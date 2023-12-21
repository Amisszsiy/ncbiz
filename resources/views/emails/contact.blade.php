<p>NC Biz Centerサイトから以下の情報でお問い合わせがありました。</p>
    <ul>
        <li><strong>企業名：</strong> {{ $form->companyname }}</li>
        <li><strong>お名前：</strong> {{ $form->fullname }}</li>
        <li><strong>メールアドレス：</strong> {{ $form->email }}</li>
        <li><strong>電話番号：</strong> {{ $form->phone }}</li>
    </ul>
    <strong>問い合わせ内容：</strong>
    <p>
        {{ $form->content }}
    </p>
    <p>このお問い合わせに対応してください。</p>