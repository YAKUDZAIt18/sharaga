document.getElementById("fio").addEventListener("invalid", check);
//Объект document метод getElementById,
//оьращаемся к элементу по его id*
//addEventListener обработчик события
//событие invalid, если поле не прошло валидацию
//второй параметр, вызываем функцию, если это событие произошло
//валидация не пройдена
function check(event) {
    // для проверки вызывается эта функция или нет,
    //выведем информацию в консоль
    console.log(event);
    // или информацию в консоль console.log("Сообщение!!!");
    //this.classlist.add("error");
    // Выделяем поле ФИО при возникновении ошибки
    this.classList.add("error");
    // Прерываем действие по умолчанию, не появляется надпись что поле не заполнено
    // Пишем текст ошибки
    document.getElementById("error").innerText = "ФИО только кририллица и пробелы";
    // Делаем абзац видимым
    document.getElementById("error").style.display = "block";
    event.preventDefault();
}