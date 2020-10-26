<div class="div-footer">
    <ul class="ul-footer">
    
        <li class="li-footer" ><a class="a-footer" href="https://twitter.com/Dvleasy" target="_blank" ><i class="fab fa-twitter-square" target="_blank"></i> Twitter</a></li>
        <li class="li-footer" ><a class="a-footer" href="https://co.pinterest.com/developmenteasy/" target="_blank" ><i class="fab fa-pinterest-square texto-iconos"></i> Pinterest</a></li>
        <li class="li-footer" ><a class="a-footer" href="https://www.facebook.com/DVLeasy-119472056341523" target="_blank" ><i class="fab fa-facebook-square texto-iconos"></i> Facebook</a></li>
        <li class="li-footer" ><a class="a-footer" href="https://www.instagram.com/dvleasy/" target="_blank" ><i class="fab fa-instagram-square texto-iconos"></i> Instagram</a></li>
        
        <li class="li-footer" >
            <p><a class="f-f" href="DvlEasy.com" target="_blank"><img src="assets/img/SOPIEC.ico" alt="" width="25%"></a> DVLeasy|SOPIEC|2020 </p>
        </li>
    </ul>
</div>

<style >
.f-f{
    font-family: monospace;
}
    .ul-footer {
        display: inline-grid;
        grid-auto-flow: row;
        grid-gap: 24px;
        justify-items: center;
        margin: auto;
        list-style: none;
    }

    @media (min-width: 500px) {
        .ul-footer {
            grid-auto-flow: column;
        }
    }

    .a-footer {
        color: black;
        text-decoration: none;
        box-shadow: inset 0 -1px 0 hsl(238deg 87% 51% / 53%);
    }

    .a-footer:hover {
        box-shadow: inset 0 -1.2em 0 hsla(0, 0%, 100%, 0.4);
    }

    .li-footer:last-child {
        grid-column: 1 / 2;
        grid-row: 1 / 2;
    }

    .li-footer:hover~li p {
        animation: wave-animation 0.3s infinite;
    }

    .li-footer:hover {
        animation: wave-animation 0.3s infinite;
    }

    /* below is just for demo styling */

    .div-footer {
        display: flex;
        height: 10vh;
        width: 100%;
        /* background-color: #002a38; */
        line-height: 1.3;
        font-family: Menlo, monospace;
    }

    @keyframes wave-animation {

        0%,
        100% {
            transform: rotate(0deg);
        }

        25% {
            transform: rotate(20deg);
        }

        75% {
            transform: rotate(-15deg);
        }
    }
</style>