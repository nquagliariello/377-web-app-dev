function card(){
    this.suit = suit;
    this.value = value;
    this.rank = rank;
}

let deck = [];

function shuffleDeck(){
    let suits =["Hearts", "Diamonds", "Clubs", "Spades"];
    for (let i = 0; i < 4; i ++) {
        for (let rank = 1; rank < 14; rank++){
            let card = new Card(suits[i], rank,rank);
            deck.push(card)

        }

        deck.sort(() => Math.random() - 0.5);
        console.log(deck);

    }
}

function dealCard(){
    let nextCard= deck.pop();
    $("#card").html(nextCard.rank + " of " + nextCard.suit);
}