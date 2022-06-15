
<div class="contianer-fluid mx-9">
	<div class="boxx">

		<div class="item">
			<div class="item-poster">
				<img src="https://lh3.googleusercontent.com/proxy/sLlMxAJLftpFgyxxmSQptxjiO2lLwp_uo3jhRy8_Mak_YeXhMGkUL6e2hTqTEOBVQysc19RpnJ-dV-VGj1Uz3EvnYkW7gaxqMsGpeiZvcrM" alt="Black Sails">
			</div>
			<div class="item-data">
				<div class="item-part">
					<div class="item-season">S4</div>
					<div class="item-episode">E10</div>
				</div>
				<h1>Black Sails</h1>
				<p>Adventure, Drama</p>
				<div class="item-rate">
					<div class="item-vote">8.2</div>
					<div class="item-time">TV Series (2014–2017)</div>
				</div>
			</div>
			<img class="item-bg" data-swap="https://i.giphy.com/media/l2R00GMs5jUujJtx6/giphy.gif" src="https://popseries.com.br/wp-content/uploads/2017/01/black-sails-.jpg" alt="">
		</div>

		<div class="item">
			<div class="item-poster">
				<img src="https://m.media-amazon.com/images/I/51DUnv5BoBL.jpg" alt="">
			</div>
			<div class="item-data">
				<div class="item-part">
					<div class="item-season">S10</div>
					<div class="item-episode">E16</div>
				</div>
				<h1>The Walking Dead</h1>
				<p>Drama, Horror, Thriller</p>
				<div class="item-rate">
					<div class="item-vote">8.1</div>
					<div class="item-time">TV Series (2010- )</div>
				</div>
			</div>
			<img class="item-bg" data-swap="https://i.giphy.com/media/l41m359K5ExF8aRoc/giphy.gif" src="https://www.wallpaperup.com/uploads/wallpapers/2015/05/29/702762/c7481417c549c5733d851692740f24db-700.jpg" alt="">
		</div>

		<div class="item">
			<div class="item-poster">
				<img src="https://m.media-amazon.com/images/M/MV5BMTRmYzNmOTctZjMwOS00ODZlLWJiZGQtNDg5NDY5NjE3MTczXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg" alt="Westworld">
			</div>
			<div class="item-data">
				<div class="item-part">
					<div class="item-season">S3</div>
					<div class="item-episode">E10</div>
				</div>
				<h1>Westworld</h1>
				<p>Drama, Mystery, Sci-Fi</p>
				<div class="item-rate">
					<div class="item-vote">8.7</div>
					<div class="item-time">TV Series (2016– )</div>
				</div>
			</div>
			<img class="item-bg" data-swap="https://i.giphy.com/media/dsWfO0joUyniyPdzUx/giphy.gif" src="https://www.kartal24.com/dosyalar/2020/01/westworld-3.jpg" alt="">
		</div>

		<div class="item">
			<div class="item-poster">
				<img src="https://m.media-amazon.com/images/M/MV5BOGE4MmVjMDgtMzIzYy00NjEwLWJlODMtMDI1MGY2ZDlhMzE2XkEyXkFqcGdeQXVyMzY0MTE3NzU@._V1_SY1000_CR0,0,674,1000_AL_.jpg" alt="Westworld">
			</div>
			<div class="item-data">
				<div class="item-part">
					<div class="item-season">S3</div>
					<div class="item-episode">E10</div>
				</div>
				<h1>The Witcher</h1>
				<p>Action, Adventure, Fantasy</p>
				<div class="item-rate">
					<div class="item-vote">8.3</div>
					<div class="item-time">TV Series (2019– )</div>
				</div>
			</div>
			<img class="item-bg" data-swap="https://media1.tenor.com/images/1fbaf34e4636f3e6c024ced99c77d4b7/tenor.gif" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSE944YASxuEsbi47hdfy5WMhWMwjuv1cthbA&usqp=CAU" alt="">
		</div>

	</div>
      </div>
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
