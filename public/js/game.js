let openRulesBlock = true;
let openInfoBlock = true;
let body = document.getElementById("body");
checkInputWithValidation();

function upLabel(labelName) {
    if (document.getElementById(labelName) !== null) {
        let label = document.getElementById(labelName);
        label.style.top = '-18px';
        label.style.fontSize = '12px';
    }
}

function downLabel(labelName) {
    if (document.getElementById(labelName) !== null) {
        let label = document.getElementById(labelName);
        label.style.top = '0px';
        label.style.fontSize = '16px';
    }
}

document.getElementById('input_name')?.addEventListener('focus', function() {
    upLabel('name_label');
});
document.getElementById('input_surname')?.addEventListener('focus', function() {
    upLabel('surname_label');
});
document.getElementById('input_callsign')?.addEventListener('focus', function() {
    upLabel('callsign_label');
});
document.getElementById('input_email')?.addEventListener('focus', function() {
    upLabel('email_label');
});
document.getElementById('input_phone')?.addEventListener('focus', function() {
    upLabel('phone_label');
});
document.getElementById('input_team')?.addEventListener('focus', function() {
    upLabel('team_label');
});

document.getElementById('input_name')?.addEventListener('blur', function() {
    downLabel('name_label');
    if (document.getElementById('input_name').value != '') {
        upLabel('name_label');
    } else {
        downLabel('name_label');
    }
});
document.getElementById('input_surname')?.addEventListener('blur', function() {
    downLabel('surname_label');
    if (document.getElementById('input_surname').value != '') {
        upLabel('surname_label');
    } else {
        downLabel('surname_label');
    }
});
document.getElementById('input_callsign')?.addEventListener('blur', function() {
    downLabel('callsign_label');
    if (document.getElementById('input_callsign').value != '') {
        upLabel('callsign_label');
    } else {
        downLabel('callsign_label');
    }
});
document.getElementById('input_email')?.addEventListener('blur', function() {
    downLabel('email_label');
    if (document.getElementById('input_email').value != '') {
        upLabel('email_label');
    } else {
        downLabel('email_label');
    }
});
document.getElementById('input_phone')?.addEventListener('blur', function() {
    downLabel('phone_label');
    if (document.getElementById('input_phone').value != '') {
        upLabel('phone_label');
    } else {
        downLabel('phone_label');
    }
});
document.getElementById('input_team')?.addEventListener('blur', function() {
    downLabel('team_label');
    if (document.getElementById('input_team').value != '') {
        upLabel('team_label');
    } else {
        downLabel('team_label');
    }
});

function checkInputWithValidation(){
    if (document.getElementById('input_name')?.value != '') {
        upLabel('name_label');
    } else {
        downLabel('name_label');
    }
    if (document.getElementById('input_surname')?.value != '') {
        upLabel('surname_label');
    } else {
        downLabel('surname_label');
    }
    if (document.getElementById('input_callsign')?.value != '') {
        upLabel('callsign_label');
    } else {
        downLabel('callsign_label');
    }
    downLabel('email_label');
    if (document.getElementById('input_email')?.value != '') {
        upLabel('email_label');
    } else {
        downLabel('email_label');
    }
    if (document.getElementById('input_phone')?.value != '') {
        upLabel('phone_label');
    } else {
        downLabel('phone_label');
    }
    downLabel('team_label');
    if (document.getElementById('input_team')?.value != '') {
        upLabel('team_label');
    } else {
        downLabel('team_label');
    }
}

if (document.getElementById('countdown') !== null)
{
    var countDownDate = new Date(document.getElementById('countdown')?.textContent).getTime();
    var x = setInterval(function() {
        var now = new Date().getTime();

        var distance = countDownDate - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById('days')?.setAttribute('style', ('--value:' + days));
        document.getElementById('hours')?.setAttribute('style', ('--value:' + hours));
        document.getElementById('min')?.setAttribute('style', ('--value:' + minutes));
        document.getElementById('sec')?.setAttribute('style', ('--value:' + seconds));

        if (distance < 0) {
            clearInterval(x);
            document.getElementById('days')?.setAttribute('style', ('--value:' + 0));
            document.getElementById('hours')?.setAttribute('style', ('--value:' + 0));
            document.getElementById('min')?.setAttribute('style', ('--value:' + 0));
            document.getElementById('sec')?.setAttribute('style', ('--value:' + 0));
        }
    }, 1000);
}
createInfoSquare();
function createInfoSquare() {
    setTimeout(() => {
        let infoSquare = document.getElementById('infoSquare');
        let infoBlockHeight = document.getElementById('infoBlock').clientHeight;
        let infoBlockWidth = document.getElementById('infoBlock').clientWidth;
        infoSquare.classList.add('duration-500');
        infoSquare.style.height = infoBlockHeight + 'px';
        infoSquare.style.width = infoBlockWidth + 'px';
        infoSquare.style.opacity = 70 + '%';
        infoSquare.style.right = -20 + 'px';
        infoSquare.style.bottom = -20 + 'px';
    }, 100);
}
function removeInfoSquare() {
    let infoSquare = document.getElementById('infoSquare');
    infoSquare.classList.remove('duration-500');
    infoSquare.style.height = 0 + 'px';
    infoSquare.style.width = 0 + 'px';
    infoSquare.style.opacity = 0 + '%';
    infoSquare.style.right = 0 + 'px';
    infoSquare.style.bottom = 0 + 'px';
}
createRulesSquare();
function createRulesSquare() {
    setTimeout(() => {
        let rulesSquare = document.getElementById('rulesSquare');
        let rulesBlockHeight = document.getElementById('rulesBlock').clientHeight;
        let rulesBlockWidth = document.getElementById('rulesBlock').clientWidth;
        rulesSquare.classList.add('duration-500');
        rulesSquare.style.height = rulesBlockHeight + 'px';
        rulesSquare.style.width = rulesBlockWidth + 'px';
        rulesSquare.style.opacity = 70 + '%';
        rulesSquare.style.right = -20 + 'px';
        rulesSquare.style.bottom = -20 + 'px';
    }, 150);
}
function removeRulesSquare() {
    let rulesSquare = document.getElementById('rulesSquare');
    rulesSquare.classList.remove('duration-500');
    rulesSquare.style.height = 0 + 'px';
    rulesSquare.style.width = 0 + 'px';
    rulesSquare.style.opacity = 0 + '%';
    rulesSquare.style.right = 0 + 'px';
    rulesSquare.style.bottom = 0 + 'px';
}
