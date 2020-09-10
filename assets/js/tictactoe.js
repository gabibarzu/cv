const winningCombinationEnum = {
    ROW: 'row',
    COLUMN: 'column',
    DIAGONAL: 'diagional'
}

let game = {
    table: $("#gameboard"),
    board: [
        [null, null, null],
        [null, null, null],
        [null, null, null],
    ],
    moves: 0,
    over: false,
    userValue: "X",
    computerValue: "Y",
    userInputValue: 0,
    computerInputValue: 1,
    winningCombination: {
        direction: '',
        value: ''
    },
    userScore: 0,
    computerScore: 0
};

function getRandomNumber() {
    return Math.floor(Math.random() * 3);
}

$("#gameboard .box").each(function () {
    $(this).on("click", function () {
        addUserInput(this);
    });
});

function addUserInput(element) {
    if (game.board[element.dataset.x][element.dataset.y] != null || game.over) {
        return;
    }
    element.dataset.value = game.userValue;
    $(element).text(game.userValue);
    game.board[element.dataset.x][element.dataset.y] = 0;
    game.moves++;
    if (isOver(game.userInputValue)) {
        game.userScore++;
        finishGame();
        return;
    }
    setTimeout(() => {
        addComputerInput();
    }, 100);
}

function addComputerInput() {
    if (game.moves == 9 || game.over) {
        return;
    }
    let x = getRandomNumber();
    let y = getRandomNumber();
    while (game.board[x][y] != null) {
        x = getRandomNumber();
        y = getRandomNumber();
    }
    game.board[x][y] = 1;
    game.moves++;
    let element = $("div").find("[data-x='" + x + "'][data-y='" + y + "']");
    $(element).attr("data-value", "O");
    $(element).text("O");
    if (isOver(game.computerInputValue)) {
        game.computerScore++;
        finishGame();
    }
}

function isOver(input) {
    for (let i = 0; i < 3; i++) {
        if (isWonOnRow(i, input) || isWonOnColumn(i, input)) {
            return true;
        }
    }
    return isWonOnDiagonal(input) || isWonOnDiagonalReverse(input);
}

function isWonOnRow(rowNumber, input) {
    let score = 0;
    for (let i = 0; i < 3; i++) {
        if (game.board[rowNumber][i] == input) {
            score++;
        }
    }
    if (score == 3) {
        game.winningCombination = {
            direction: winningCombinationEnum.ROW,
            value: rowNumber
        }
        return true;
    }
    return false;
}

function isWonOnColumn(columnNumber, input) {
    let score = 0;
    for (let i = 0; i < 3; i++) {
        if (game.board[i][columnNumber] == input) {
            score++;
        }
    }
    if (score == 3) {
        game.winningCombination = {
            direction: winningCombinationEnum.COLUMN,
            value: columnNumber
        }
        return true;
    }
    return false;
}

function isWonOnDiagonal(input) {
    let score = 0;
    for (let i = 0; i < 3; i++) {
        if (game.board[i][i] == input) {
            score++;
        }
    }
    if (score == 3) {
        game.winningCombination = {
            direction: winningCombinationEnum.DIAGONAL,
            value: 1
        }
        return true;
    }
    return false;
}

function isWonOnDiagonalReverse(input) {
    let score = 0;
    let i = 0;
    let j = 2;
    while (i < 3) {
        if (game.board[i][j] == input) {
            score++;
        }
        i++;
        j--;
    }
    if (score == 3) {
        game.winningCombination = {
            direction: winningCombinationEnum.DIAGONAL,
            value: -1
        }
        return true;
    }
    return false;
}

function finishGame() {
    game.over = true;
    game.table.attr("data-value", "over");
    colorWinningCombination();
    updateScore();
    $("#gameRetry").fadeIn(300);
}

function colorWinningCombination() {
    switch (game.winningCombination.direction) {
        case winningCombinationEnum.ROW: {
            colorOnRow(game.winningCombination.value);
            return;
        }
        case winningCombinationEnum.COLUMN: {
            colorOnColumn(game.winningCombination.value);
            return;
        }
        case winningCombinationEnum.DIAGONAL: {
            colorOnDiagonal(game.winningCombination.value);
            return;
        }
    }
}

function colorOnRow(rowNumber) {
    for (let i = 0; i < 3; i++) {
        $("div").find("[data-x='" + rowNumber + "'][data-y='" + i + "']").addClass("win");
    }
}

function colorOnColumn(columnNumber) {
    for (let i = 0; i < 3; i++) {
        $("div").find("[data-x='" + i + "'][data-y='" + columnNumber + "']").addClass("win");
    }
}

function colorOnDiagonal(diagonalNumber) {
    if (diagonalNumber == 1) {
        for (let i = 0; i < 3; i++) {
            $("div").find("[data-x='" + i + "'][data-y='" + i + "']").addClass("win");
        }
    } else {
        let i = 0;
        let j = 2;
        while (i < 3) {
            $("div").find("[data-x='" + i + "'][data-y='" + j + "']").addClass("win");
            i++;
            j--;
        }
    }
}

function updateScore() {
    $("#userScore").text(game.userScore);
    $("#computerScore").text(game.computerScore);
}

function startOver() {
    resetBoard();
}

function resetBoard() {
    game.table.removeAttr("data-value");
    $("#gameboard .box").each(function () {
        $(this).text("");
        $(this).removeClass("win");
        $(this).removeAttr("data-value");
        game.board = [
            [null, null, null],
            [null, null, null],
            [null, null, null],
        ]
        game.moves = 0;
        game.over = false;
        game.winningCombination = {
            direction: '',
            value: ''
        };
    });
}