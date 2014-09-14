// ドラッグ可能なspan要素にイベントハンドラを登録
/*
var span1 = document.getElementById('span1');
span1.addEventListener('dragstart', handleDragStart);
*/

// ドロップ対象のdiv要素にイベントハンドラを登録
var target = document.getElementById('div2');
target.addEventListener('drop', handleDrop);
target.addEventListener('dragover', handleDragOver);

// ドラッグ開始
function handleDragStart(e) {
	// ドラッグ対象の要素のidを保存
	e.dataTranfer.setData('text', e.target.id);
}

// ドロップ対象の要素に重なっている間
function handleDragOver(e) {
	// デフォルトの動作をキャンセルする
	e.preventDefault();
}

// ドロップされたとき
function handleDrop(e) {
	// 複数のファイルがドロップされることもあるのでループ処理
	for(var i=0; i<e.dataTransfer.files.length; i++) {
		// ファイルを取得
		var file = e.dataTransfer.files[i];
		console.log('name: ' + file.name);	// ファイル名
		console.log('type: ' + file.type);	// ファイルの種類(MINEタイプ)
		console.log('size: ' + file.size);	// ファイルのサイズ(バイト)
		// ファイルの読み込み時の処理
		var fileReader = new FileReader();
		fileReader.onload = function(e) {
			console.log('contents: ' + e.target.result); //	ファイルの内容
		}
		// ファイル読み込みエラー時の処理
		fileReader.onerror = function(e) {
			consoloe.log(e);
		}
		// ファイルをテキストとして読み込み
		fileReader.readAsText(file);
	}
	// デフォルトの動作をキャンセルする
	e.preventDefault();
}