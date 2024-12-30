import './bootstrap';

function deleteConfirmItem(event) {
  event.preventDefault();
  if (confirm('ごみ箱に入れますか？')) {
    event.target.closest('form').submit();
  }
}

function clearConfirm(event) {
  event.preventDefault();
  if (confirm('ごみ箱を空にしますか？')) {
    event.target.closest('form').submit();
  }
}

function recoverTaskConfirm(event) {
  event.preventDefault();
  if (confirm('タスクを復元しますか？')) {
    event.target.closest('form').submit();
  }
}

// グローバルに関数を登録（オプション）
window.deleteConfirmItem = deleteConfirmItem;
window.clearConfirm = clearConfirm;
window.recoverTaskConfirm = recoverTaskConfirm;