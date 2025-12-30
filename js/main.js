const slotBtn = document.getElementsByClassName("slot"); // دکمه‌های سانس
const slotGroup = document.getElementsByClassName("slot-group"); // گروه ساعت‌ها

// اضافه کردن Event Listener برای هر دکمه سانس
for (let i = 0; i < slotBtn.length; i++) {
    slotBtn[i].addEventListener("click", handleSlotChange);
}

function handleSlotChange(e) {
    e.preventDefault(); // جلوگیری از رفتار پیش‌فرض

    // بررسی سانس انتخاب شده و نمایش گروه ساعت مربوط
    if(e.target.id === "Morning"){ // سانس صبح
        document.getElementById("Morning-slot").classList.remove("d-none");
        document.getElementById("Afternoon-slot").classList.add("d-none");
        document.getElementById("Evening-slot").classList.add("d-none");
        document.getElementById("book").classList.remove("disabled"); // فعال کردن دکمه رزرو
    }
    else if(e.target.id === "Afternoon"){ // سانس عصر
        document.getElementById("Morning-slot").classList.add("d-none");
        document.getElementById("Afternoon-slot").classList.remove("d-none");
        document.getElementById("Evening-slot").classList.add("d-none");
        document.getElementById("book").classList.remove("disabled");
    }
    else if(e.target.id === "Evening"){ // سانس شب
        document.getElementById("Morning-slot").classList.add("d-none");
        document.getElementById("Afternoon-slot").classList.add("d-none");
        document.getElementById("Evening-slot").classList.remove("d-none");
        document.getElementById("book").classList.remove("disabled");
    }
}
