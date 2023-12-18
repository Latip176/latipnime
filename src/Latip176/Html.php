<?php

namespace Latip176;

class Html {
    public static function navbar() {
        return <<<EOD
            <div class="navbar">
                <div class="nav">
                    <ul class="list">
                        <li><a href="/">Home</a></li>
                        <li><a href="/ongoing">Ongoing</a></li>
                        <li><a href="https://wa.me/6283870396203">Contact Me</a></li>
                        <li>
                            <form action="/search" method="get">
                                <input type="text" name="keyword" class="keyword" placeholder="cari anime favorite kamu"> <button type="submit">Search</button>
                            </form>
                        </li>
                    </ul>
                    <ul class="open">
                        <li>
                            <div></div>
                            <div></div>
                            <div></div>
                        </li>
                    </ul>
                    <ul class="close">
                        <li>
                            <div></div>
                            <div></div>
                            <div></div>
                        </li>
                    </ul>
                    <span class="nav-brand" style="font-size: 20px;"><span style="color: #00f; text-shadow: 0 0 10px #00f, 0 0 20px #00f, 0 0 30px #00f;">Latip</span>Nime</span>
                </div>
            </div>
            <div class="navbar-content">
                <ul>
                    <li id="item"><a href="/index.php">Home</a></li>
                    <li id="item"><a href="/ongoing">Ongoing</a></li>
                    <li id="item"><a href="https://wa.me/6283870396203">Contact Me</a></li>
                    <li id="item">
                        <form action="/search" method="get">
                            <input type="text" name="keyword" class="keyword" placeholder="cari anime favorite kamu"> <button type="submit">Search</button>
                        </form>
                    </li>
                </ul>
            </div>
        EOD;
    }
    
    public static function footer() {
        return <<<EOD
            <div class="footer">
                <div style="width: 100%; height: 100px; text-align: center; ">
                    <p class="text-light fw-bold" style="line-height: 100px;">&copy; 2023 - 2024 Made By ❤️ <a href="https://latipharkat.my.id/" class="latip">Latip176</a></p>
                </div>
            </div>
        EOD;
    }
}
