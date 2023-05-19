let numberOfFilms = prompt('Сколько фильмов вы смотерли?');
let filmName, filmRate;

personalMovieDB = {
    count: numberOfFilms,
    movies: {},
    actors: {},
    genres: [],
    private: false,
}

if(numberOfFilms <= 0 || numberOfFilms == ''){
    alert('Количество фильмов = 0');
    location.reload();
} else {
    if(numberOfFilms != '' ){
        for(let i = 1; i<=numberOfFilms; i++){
            let filmName = prompt('Что за фильм?');
            let filmRate = prompt('Оцените его?');
    
            if((numberOfFilms != '' && filmName != '' && filmRate != '')){
                if(filmName.length <= 50){
                    personalMovieDB.movies[filmName] = filmRate;
                }
                else {
                    alert('Поля имени не должно содержать больше 50 символов!');
                }
            } else {
                alert('Заполните поля');
                location.reload();
            }
        }

        if(numberOfFilms<10){
            alert('Просмотренно мало фильмов')
        } else if(numberOfFilms > 10 && numberOfFilms <= 30){
            alert("Вы типичный зритель");
        } else if(numberOfFilms > 30) {
            alert('Вы - киноман');
        } else {
            alert('Произошла ошибка');
        }
    }
}

showMyDb();
writeYourGenres(1);

function showMyDb(){
    if(personalMovieDB.private == false){
        console.log(personalMovieDB);
    } else {
        return true;
    }
}

function writeYourGenres(count){
    while(count <= 3){
        personalMovieDB.genres.push( prompt('Ваш любимый жанр под номером?'
        + (count)
        ));
        count++;
    }
}