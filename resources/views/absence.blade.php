<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Frånvaroanmälan</title>
        <link rel="stylesheet" href="/css/main.css" />
    </head>
    <body>
        <header>
            <div class="header-wrapper">
                <h1>Qurant</h1>
                <div class="profile">
                    <p>Demogruppen AB</p>
                    <img src="/img/profile.png" alt="profile" />
                    <span></span>
                </div>
            </div>
        </header>
        <main class="wrapper">
            <article>
                <div class="box"></div>
                <div class="profile-card">
                    <div class="name">
                        <div class="circle">
                            <h1>KP</h1>
                        </div>
                        <div class="name-text">
                            <h3>Kalle Persson</h3>
                            <p>Mitt Qurant ID: @ondyx7X</p>
                        </div>
                    </div>
                    <div>
                        <button>Gör en frånvaroanmälan</button>
                    </div>
                </div>
            </article>
            <div class="container">
                <nav class="side-menu">
                    <h2>Frånvaro</h2>
                    <ul>
                        <li><a href="#">Ny frånvaro</a></li>
                    </ul>
                </nav>
                <section class="form-section">
                  <div class="heading">
                    <p>Frånvaro</p>
                    <h1>Frånvaro</h1>
                  </div>
                  <div class="form-container">
                    <form id="absence-form">
                        <div class="form-heading">
                          <h3>Ny frånvaro</h3>
                        </div>
                        <div>
                            <label for="absenceType">Frånvarotyp*</label>
                            <div class="card-container">
                                <input
                                    type="radio"
                                    name="absenceType"
                                    value="SickLeave"
                                    id="Sjukanmalan"
                                    class="card-input"
                                />
                                <label for="Sjukanmalan" class="card">
                                    Sjukanmälan
                                </label>

                                <input
                                    type="radio"
                                    name="absenceType"
                                    value="VAB"
                                    id="VAB"
                                    class="card-input"
                                />
                                <label for="VAB" class="card"> VAB </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="absenceID">Frånvaronivå</label>
                            <input
                                type="number"
                                id="absenceID"
                                name="absenceID"
                                min="100"
                                max="105"
                            />
                        </div>

                        <div class="form-group">
                            <label for="absenceDateFrom"
                                >Frånvaro från datum*</label
                            >
                            <input
                                type="date"
                                id="absenceDateFrom"
                                name="absenceDateFrom"
                                required
                            />
                        </div>

                        <div class="form-group">
                            <label for="absenceTimeFrom"
                                >Frånvaro från klockan</label
                            >
                            <input
                                type="time"
                                id="absenceTimeFrom"
                                name="absenceTimeFrom"
                            />
                        </div>
                        <hr />
                        <div class="form-group">
                            <label for="absenceDateTo"
                                >Beräknat tillbaka*</label
                            >
                            <input
                                type="date"
                                id="absenceDateTo"
                                name="absenceDateTo"
                                required
                            />
                        </div>

                        <div class="form-group">
                            <label for="comments">Kommentarer</label>
                            <textarea id="comments" name="comments"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="phoneNumber">Telefonnummer*</label>
                            <input
                                type="tel"
                                id="phoneNumber"
                                name="phoneNumber"
                                required
                            />
                        </div>

                        <div class="form-group">
                            <button type="submit" id="submitBtn">
                                Frånvaroanmälan
                            </button>
                        </div>
                    </form>
                    </div>

                </section>
            </div>
        </main>
    </body>
</html>
