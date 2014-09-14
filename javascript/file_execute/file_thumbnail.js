// ドロップ対象のdiv要素にイベントハンドラを登録
var target = document.getElementById('div2');
target.addEventListener('drop', handleDrop);
target.addEventListener('dragover', handleDragOver);

// ドラッグ開始
function handleDragStart(e){
  // ドラッグ対象の要素のidを保存
  e.dataTransfer.setData('text', e.target.id);
}

// ドロップ対象の要素に重なっている間
function handleDragOver(e){
  // デフォルトの動作をキャンセルする
  e.preventDefault();
}

// ドロップされたとき
function handleDrop(e){
  // 複数のファイルがドロップされることもあるのでループで処理
  for(var i = 0; i < e.dataTransfer.files.length; i++){
    // ファイルを取得
    var file = e.dataTransfer.files[i];
    // ファイル読み込み時の処理
    var fileReader = new FileReader();
    fileReader.onload = function(e) {
      // Fileのタイプから画像ファイルであることを確認
      if(file.type.indexOf('image/') == 0){
        // データURLでイメージを表示するimg要素を作成
        var img = document.createElement('img');
        img.setAttribute('src', e.target.result);
        img.setAttribute('style', 'height: 100px;');
        // 作成したimg要素をドロップ領域に追加
        var target = document.getElementById('div2');
        target.appendChild(img);
      } else {
        alert('画像ファイルではありません。');
      }
    }
    // ファイル読み込みエラー時の処理
    fileReader.onerror = function(e) {
      console.log(e);
    }
    // ファイル読み込みの進捗状況を%で表示
    fileReader.onprogress = function(e) {
      if (e.lengthComputable) {
      var percent = Math.round((e.loaded / e.total) * 100);
        document.getElementById('progress').innerHTML = percent + '%';
      }
    }
    
    // ファイルをテキストとして読み込み
    fileReader.readAsDataURL(file);
  }
  // デフォルトの動作をキャンセルする
  e.preventDefault();
}