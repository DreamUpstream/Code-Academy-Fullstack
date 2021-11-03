class Movie {
    constructor(name, year, director, budget, income) {
      this.name = name;
      this.year = year;
      this.director = director;
      this.budget = budget;
      this.income = income;
    }

    getIntroduction() {
        return "Movie name is: " + this.name + " " + this.year + " " + this.director;
    }

    getProfit() {
        return "Movie generated profit is: " + (Number(this.income) - Number(this.budget));
    }
} 