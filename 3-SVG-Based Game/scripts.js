let deck = [];
let playerCards = [];
bankerCards = [];
let pTotal = 0;
let bTotal = 0;
let turn = true;

$(function() {
    shuffleDeck();
});

function Card(suit, value, rank){
    this.suit = suit;
    this.value = value;
    this.rank = rank;
}

function createDeck() {
    let newDeck = [];
    let suits = ["Hearts","Diamonds","Clubs","Spades"];
    for (let suit of suits){
        for (let rank = 1; rank <= 13; rank++){
            let value = rank > 9 ? 0 : rank; // face cards = 0
            newDeck.push(new Card(suit, value, rank));
        }
    }
    return newDeck;
}
function shuffleDeck(){
    deck.sort(() => Math.random() - 0.5);
}


function dealCard(){
    playerCards = [];
    bankerCards = [];
    pTotal = 0;
    bTotal = 0;
    turn = true;
    
    $("#button1, #button2").prop("disabled", false);
    
    if (deck.length < 4){
        deck = createDeck();
        shuffleDeck();
    }
    
    for(let i = 0; i < 2; i++){
        playerCards.push(deck.pop());
        bankerCards.push(deck.pop());
    }
    
    pTotal = ((playerCards[0].value + playerCards[1].value) % 10);
    bTotal = ((bankerCards[0].value + bankerCards[1].value) % 10);
    
    $("#ptotal").html("Player total: " + pTotal);
    $("#btotal").html("Banker total: " + bTotal);
    
    let nextCard= deck.pop();
    $("#p1rank").html(playerCards[0].rank);
    $("#p1suit").html(playerCards[0].suit);
    
    nextCard= deck.pop();
    $("#b1rank").html(bankerCards[0].rank);
    $("#b1suit").html( bankerCards[0].suit);
    
    nextCard= deck.pop();
    $("#p2rank").html(playerCards[1].rank);
    $("#p2suit").html(playerCards[1].suit);
    
    nextCard= deck.pop();
    $("#b2rank").html(bankerCards[1].rank);
    $("#b2suit").html(bankerCards[1].suit);
    
    $("#ptotal").html("Player total: " + pTotal);
    $("#btotal").html("Banker total: " + bTotal);

    $("#result").html("Player's turn: Hit or Stay?");
}


function hit(){
if (!turn) return;

    let hitCard = deck.pop()
    playerCards.push(hitCard);
    pTotal = (pTotal + hitCard.value) % 10;
    $("#ptotal").html("Player total: " + pTotal);

    if (pTotal >= 9){
        stay();
    }   
}

function stay(){
    if (!turn) return;
    turn = false;

    $("#button1, #button2").prop("disabled", true);

    if (bTotal < 6){
        let newCard = deck.pop();
        bankerCards.push(newCard);
        bTotal = (bTotal + newCard.value) % 10;
        $("#btotal").html("Banker Total: " + bTotal);
    }
    checkWinner();
}

function checkWinner(){
    let message = "";

    if (pTotal > bTotal){
        message = "Player wins with total " + pTotal;
    } else if (bTotal > pTotal){
        message = "Banker wins with total " + bTotal;
    } else{
        message = "Its a tie, both players have " + pTotal;
    }

    $("#result").html(message);
    
}

function playerorbanker(){
    if (!turn){
        $("#button1, #button2").prop(diabled, true);
    }

}


// need to make turns, if its player turn 
// then hit stay buttons can be enggaged, 
// always cards ones place value, once 
// player has close to 9 stay can be 
// used then its banker turn is up