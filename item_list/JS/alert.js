/* <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> */

/* <button onclick='alertCompare()'>Alert</button>
<button onclick='confirmTest()'>Confirm</button> */

function alertCompare() {

    Swal.fire(
        "加入比較列表成功", //標題 
        "", //訊息內容(可省略)
        "success" //圖示(可省略) success/info/warning/error/question
        //圖示範例：https://sweetalert2.github.io/#icons
    );
}
function confirmCompare() {
    Swal.fire({
        title: "操作確認",
        text: "請點選你想按的按鈕",
        showCancelButton: true
    }).then(function (result) {
        if (result.value) {
            Swal.fire("您按了OK");
        }
        else {
            Swal.fire("您選擇了Cancel");
        }
    });
}
