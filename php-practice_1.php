<?php
// Q1 変数と文字列
$name = '「村上」';
$message = '私の名前は' . $name . 'です。';
echo $message;

// Q2 四則演算
$x = 5;
$y = 4;
$num = $x * $y;
var_dump($num);
var_dump($num / 2);

// Q3 日付操作
$date = new DateTime('now');
echo $date->format('現在時刻は、' . 'Y年m月d日 H時i分s秒' . 'です。');

// Q4 条件分岐-1 if文
$device = 'windows'; //変数$deviceに文字列を設定
if ($device === 'windows'){ //もし$deviceが'windows'と同じなら
    echo'使用OSは、windowsです。'; //'使用OSは、windowsです。'と表示
} else { //そうでなければ
    if ($device === 'mac'){ //もし$deviceが'mac'と同じなら
        echo '使用OSは、macです。'; //'使用OSは、macです。'と表示
    } else { //そうでなければ
        echo 'どちらでもありません。'; //'どちらでもありません。'と表示
    }
}

// Q5 条件分岐-2 三項演算子
$age = 25;
if ($age < 18) {
    $message = '未成年です。';
} else {
    $message = '成人です。';
}
echo $message;

// Q6 配列
$kanto = [
    '東京都',
    '神奈川県',
    '埼玉県',
    '千葉県',
    '茨城県',
    '栃木県',
    '群馬県'
];
echo $kanto[2] . 'と' . $kanto[3] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
// 関東の都・県をキー、県庁所在地をバリューとする連想配列を作成
$kanto_capitals = [
    '東京都'   => '新宿区',
    '神奈川県' => '横浜市',
    '埼玉県'   => 'さいたま市',
    '千葉県'   => '千葉市',
    '茨城県'   => '水戸市',
    '栃木県'   => '宇都宮市',
    '群馬県'   => '前橋市'
];
 // foreach ループを使って、連想配列の各バリュー（県庁所在地）を取り出し、縦に表示
foreach ($kanto_capitals as $capital) {
    echo $capital . "\n";
}

// Q8 連想配列-2
 // 連想配列から「埼玉県」の県庁所在地を取得
$prefecture_name = '埼玉県';
$capital_city = $kanto_capitals[$prefecture_name];
 // $prefecture_name が '埼玉県' かつ $capital_city が 'さいたま市' であることを確認するif文
if ($prefecture_name === '埼玉県' && $capital_city === 'さいたま市') { 
    //「&&」意味:「〜かつ〜」または「〜と〜の両方」使い方:条件式A && 条件式B
    echo $prefecture_name . 'の県庁所在地は、' . $capital_city . 'です。' . "\n";
}

// Q9 連想配列-3
$prefecture = [
    '東京都'   => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県'   => '千葉市',
    '埼玉県'   => 'さいたま市',
    '栃木県'   => '宇都宮市',
    '群馬県'   => '前橋市',
    '茨城県'   => '水戸市',
    '愛知県'   => '名古屋市',
    '大阪府'   => '大阪市'
];
$kanto_list = [
    '東京都', '神奈川県', '埼玉県', '千葉県',
    '茨城県', '栃木県', '群馬県'
];
foreach ($prefecture as $prefecture_name => $capital_city) { // キーとバリューの両方を取得
    if (in_array($prefecture_name, $kanto_list)) {
        echo $prefecture_name . 'の県庁所在地は、' . $capital_city . 'です。' . "\n";
    } else {
        echo $prefecture_name . 'は関東地方ではありません。' . "\n";
    }
}

// Q10 関数-1
function hello($name) {
    // 挨拶文字列を作成し、返す
    return $name . 'さん、こんにちは。';
}
echo hello('田中') . "\n";
echo hello('鈴木') . "\n";

// Q11 関数-2
function calcTaxInPrice($sprice) {
    $tax_rate = 0.10; // 消費税10%
    $tax_amount = $sprice * $tax_rate; // 消費税額を計算
    $tax_in_price = $sprice + $tax_amount; // 税込価格を計算
    return $tax_in_price;
}
// 税抜き価格を変数 $sprice として定義
$sprice = 1000;
// 関数を実行した返り値を、変数 $taxInPrice に代入
$taxInPrice = calcTaxInPrice($sprice);
// 最終的に、下記のような文章を表示
echo $sprice . '円の商品の税込価格は' . $taxInPrice . '円です。' . "\n";

// Q12 関数とif文
function distinguishNum($number) {
    // if文を使用して、数字を奇数か偶数か判別
    // 剰余演算子 (%) を使用: 数字を2で割った余りが0なら偶数、0以外なら奇数
    if ($number % 2 === 0) { // 数字を2で割った余りが0かチェック
        return $number . 'は偶数です。'; // 偶数であればこの文字列を返す
    } else {
        return $number . 'は奇数です。'; // 奇数であればこの文字列を返す
    }
}
// 奇数を関数に渡して実行し、結果をechoで表示
echo distinguishNum(11) . "\n";
// 偶数を関数に渡して実行し、結果をechoで表示
echo distinguishNum(24) . "\n";

// Q13 関数とswitch文
function evaluateGrade($grade) { // 関数名は evaluateGrade
    // switch文を使って引数で受け取った成績に応じて処理を分ける
    switch ($grade) {
        case 'A': // 成績が 'A' の場合
        case 'B': // 成績が 'B' の場合
            // 'A' または 'B' だったら「合格です。」を返す
            return '合格です。';
        case 'C':
            return '合格ですが追加課題があります。';
            break;  // break：意図した case の処理が完了した後に、それ以上他の case の処理を実行しないように、
            // switch 文から抜け出すために使用される重要なキーワード
        case 'D':
            return '不合格です。';
            break;
        default: // その他の文字列だった場合
            // 「判定不明です。講師に問い合わせてください。」を返す
            return '判定不明です。講師に問い合わせてください。';
            break;
    }
}
echo evaluateGrade('A') . "\n"; // 'A' を渡して「合格です。」が出る
echo evaluateGrade('E') . "\n"; // 「判定不明です。」が出る

?>