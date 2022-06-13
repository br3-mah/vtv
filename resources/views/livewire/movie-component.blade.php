<div class="div-filmes">
        
@forelse($data as $movie)
    <div class="box-filmes">
        <a href="{{ route('video-player',['movie' => substr($movie->media_path, strrpos($movie->media_path, '/') + 1)  ]) }}" title="{{ $movie->caption_title }}">{{ $movie->caption_title }}
            <br>
            <img src="/storage/{{ $movie->cover_image }}" class="capas-filmes">
            <p>{{ $movie->sub_headline }}</p>
        </a>
    </div>
@empty
@endforelse


        <!-- <div class="box-filmes">
            <a href="#" title="Doutor Estranho: no Multiverso da Loucura">Doutor Estranho no Multiverso...
                <br>
                <img src="https://portalpopline.com.br/wp-content/uploads/2022/02/doutor-estranho-poster.jpg" class="capas-filmes">
                <p>Dublado</p>
            </a>
        </div>

        <div class="box-filmes">
            <a href="#" title="Homem Aranha: Sem Volta Para Casa">Homem Aranha: Sem Volta P...
                <br>
                <img src="https://kinoplex.com.br/filmes/images/cartaz/262x388/homem-aranha-sem-volta-para-casa.jpg?1638379447" class="capas-filmes">
                <p>Dublado</p>
            </a>
        </div>

        <div class="box-filmes">
            <a href="#" title="O Projeto Adam">O Projeto Adam
                <br>
                <img src="https://pobreflixfilmes.com/wp-content/uploads/2022/03/11MJy6lkt7yTEIowEPIkaK4B7lM-185x278.jpg" class="capas-filmes">
                <p>Dublado</p>
            </a>
        </div>

        <div class="box-filmes">
            <a href="#" title="Red: Crescer é Uma Fera">Red: Crescer é Uma Fera
                <br>
                <img src="https://pobreflixfilmes.com/wp-content/uploads/2022/03/p1W2ZfQKExZVZSG7ldUPzVwGKpr-scaled-185x278.jpg" class="capas-filmes">
                <p>Dublado</p>
            </a>
        </div>
        <div class="box-filmes">
            <a href="#" title="Pânico 2022">Pânico 2022
                <br>
                <img src="https://pobreflixfilmes.com/wp-content/uploads/2022/01/7qrIvCcUcQGZBFLrgBLcaIcEuHd-185x278.jpg" class="capas-filmes">
                <p>Dublado</p>
            </a>
        </div>

        <div class="box-filmes">
            <a href="#" title="O Beco do Pesadelo">O Beco do Pesadelo
                <br>
                <img src="https://pobreflixfilmes.com/wp-content/uploads/2021/12/sQIID0rsi8nvLF1Nt3f2Aqk9Hbz-185x278.jpg" class="capas-filmes">
                <p>Dublado</p>
            </a>
        </div>

        <div class="box-filmes">
            <a href="#" title="Batman 2022">Batman 2022
                <br>
                <img src="https://uauposters.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/2/5/259420220222-uau-posters-the-batman-filmes-7.jpg" class="capas-filmes">
                <p>Dublado</p>
            </a>
        </div>

        <div class="box-filmes">
            <a href="#" title="Kingsman: A Origem">Kingsman: A Origem
                <br>
                <img src="https://pobreflixfilmes.com/wp-content/uploads/2021/12/509rj2kjXyf69B31cfXjPizIkgt-185x278.jpg" class="capas-filmes">
                <p>Dublado</p>
            </a>
        </div>

        <div class="box-filmes">
            <a href="#" title="O Massacre da Serra Elétrica: O Retorno de Leatherface">O Massacre da Serra Elétrica...
                <br>
                <img src="https://pobreflixfilmes.com/wp-content/uploads/2022/02/4YMiQNAHpfm4sx8f5dL5zKWSFdc-185x278.jpg" class="capas-filmes">
                <p>Dublado</p>
            </a>
        </div> -->
    </div>