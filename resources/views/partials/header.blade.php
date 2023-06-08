

<style>

    #pre-header{
        background-color: blue;
        color: white;
        height: 40px;
    }
    #pre-header .container{
        justify-content: flex-end;
        align-items: center;
        gap: 20px;
    }
    
    .header{
        background-color: white;
        height: 10vh;
    }
        
        
        .container{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

            ul{
                display: flex;
                gap: 10px;
                line-height: 9.5vh;
            }
                li{
                    list-style-type: none;
                }
                    
                    a{
                        text-decoration: none;
                        color: black;
                        text-transform: uppercase;
                        font-size: 0.8em;
                        font-weight: bold;
                    }
                
                li:hover{
                    border-bottom: 4px solid rgb(12,124,236);
                }
                    a{
                        color: rgb(12,124,236);
                    }
                
    </style>
    <div id="pre-header">
        <div class="container d-flex">
            <span>asdasdasd</span>
            <span>asdasdasd</span>
        </div>
    </div>
    <div class="header">
        <div class="container">
            <img src="public/images/dc-logo.png" alt="asd">
            <ul>
                <li><a href="#">characters</a></li>
                <li><a href="#">comics</a></li>
                <li><a href="#">movies</a></li>
                <li><a href="#">tv</a></li>
                <li><a href="#">games</a></li>
                <li><a href="#">collectibles</a></li>
                <li><a href="#">videos</a></li>
                <li><a href="#">fans</a></li>
                <li><a href="#">news</a></li>
                <li><a href="#">shop</a></li>
            </ul>
        </div>
    </div>