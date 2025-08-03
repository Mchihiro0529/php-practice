<?php
// Q1 tic-tac問題
echo '1から100までのカウントを開始します\n';
// 1から100までの数字についてループ処理を行う
for ($i = 1; $i <=100; $i++) {
    if ($i % 4 === 0 && $i % 5 === 0){
        echo 'tic-tac\n';
    }
    else if ($i % 4 === 0){
        echo 'tic\n';
    }
    else if ($i % 5 === 0){
        echo 'tac\n';
    }
    else {
        echo $i . '\n';
    }
}

// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];
// 問題１
// Bさんの情報を取得
// $personalInfos[1] で2番目の要素（インデックス1）にアクセス
// その要素（連想配列）から 'name' と 'tel' のバリューを取得
$b_san_name = $personalInfos[1]['name'];
$b_san_tel = $personalInfos[1]['tel'];

// 出力例に合わせて表示
echo $b_san_name . 'の電話番号は' . $b_san_tel . 'です。' . "\n";

// ループの回数を数えるためのカウンターを初期化（1から始めるため0ではなく1で初期化するか、ループ内で+1する）
$count = 1;

// 問題２
// foreach ループで $personalInfos の各要素（個人の情報）を取り出す
foreach ($personalInfos as $person) {
    // 各個人の情報（連想配列）から、名前、メールアドレス、電話番号を取得
    $name = $person['name'];
    $mail = $person['mail'];
    $tel = $person['tel'];

    // 出力例に合わせて文章を組み立てて表示
    // $count を使用して「1番目」「2番目」などの数字を表示
    echo $count . '番目の' . $name . 'のメールアドレスは' . $mail . 'で、電話番号は' . $tel . 'です。' . "\n";

    // 次のループのためにカウンターを増やす
    $count++;
}

// 問題３
// 新しく追加する年齢のリスト
$ageList = [25, 30, 18]; //

// foreach を使用して $personalInfos に 'age' キーを追加
// array_keys() で $personalInfos のキー（0, 1, 2）を取得し、foreach で回すことで
// 各要素を直接参照（&）しながら更新
foreach (array_keys($personalInfos) as $index) {
    // $personalInfos の現在の要素（サブ配列）に 'age' キーを追加し、$ageList から対応する年齢を代入
    // $personalInfos[$index] は $personalInfos の0番目、1番目、2番目の要素を指す
    // $ageList[$index] は $ageList の0番目（25）、1番目（30）、2番目（18）を指す
    $personalInfos[$index]['age'] = $ageList[$index];
}
var_dump($personalInfos);

// Q3 オブジェクト-1
// 問題文に示されたStudentクラスを定義
class Student
{
    public $studentId;   // 学籍番号を格納するプロパティ
    public $studentName; // 生徒名を格納するプロパティ

    // コンストラクタ: クラスのインスタンスが作成されるときに自動的に実行されるメソッド
    public function __construct($id, $name)
    {
        // 引数で受け取った$idを$studentIdプロパティに設定
        $this->studentId = $id;   //
        // 引数で受け取った$nameを$studentNameプロパティに設定
        $this->studentName = $name; //
    }

    // 授業に出席したことを示すメッセージを出力するメソッド
    public function attend()
    {
        echo '授業に出席しました。 ';
    }
}

// Studentクラスの新しいインスタンス（オブジェクト）を作成
// コンストラクタに「学籍番号120」と「山田」を渡す
$student = new Student(120, '山田'); //

// 出力例に合わせて文章を表示
// オブジェクトのプロパティにアクセスするには -> 演算子を使用
echo '学籍番号' . $student->studentId . '番の生徒は' . $student->studentName . 'です。' . "\n"; //

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName; 
    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($courseName = 'PHP')
    {
        echo $this->studentName . 'は' . $courseName . 'の授業に参加しました。学籍番号' . $this->studentId . "\n";
    }
}
$student = new Student(120, '山田'); 
$student->attend();
$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
// 問題１
// 今日の日付を取得
$date = new DateTime();
// 一か月前の日付を計算
$date->modify('-1 month');
// 結果を出力
echo $date->format('Y-m-d');

// 問題２
// 基準日をDateTimeオブジェクトとして定義
$startDate = new DateTime('1992-04-25');
// 今日の日付を取得
$today = new DateTime();
// 日数の差を計算
$interval = $startDate->diff($today);
// 結果を出力
echo 'あの日から' . $interval->days . '日経過しました。';

?>