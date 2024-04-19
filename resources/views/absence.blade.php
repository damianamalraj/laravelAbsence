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
                            <div class="form-text">
                                <p>
                                    Var medveten om att sjukanmällan för samma
                                    dag inte är giltig om den görs innan 05.00
                                </p>
                            </div>
                            <div class="form">
                                <div>
                                    <label for="absenceType"
                                        >Frånvarotyp*</label
                                    >
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
                                        <label for="VAB" class="card">
                                            VAB
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="absenceID">Frånvaronivå</label>
                                    <div>
                                        <input
                                            type="number"
                                            id="absenceID"
                                            name="absenceID"
                                            min="100"
                                            max="105"
                                        />
                                        <small>Max 100%</small>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="absenceDateFrom"
                                        >Frånvaro från datum*</label
                                    >
                                    <div>
                                        <input
                                            type="date"
                                            id="absenceDateFrom"
                                            name="absenceDateFrom"
                                            required
                                        />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="absenceTimeFrom"
                                        >Frånvaro från klockan*</label
                                    >
                                    <div>
                                        <input
                                            type="time"
                                            id="absenceTimeFrom"
                                            name="absenceTimeFrom"
                                            required
                                        />
                                        <small
                                            >Kontrollera at tid och datum
                                            stämmer. Den ska visa första dagen
                                            du är frånvarande eller den tid du
                                            lämnade arbetsplaten.</small
                                        >
                                    </div>
                                </div>
                                <hr />
                                <div class="form-group break">
                                    <label for="absenceDateTo"
                                        >Beräknat tillbaka*</label
                                    >
                                    <div>
                                        <input
                                            type="date"
                                            id="absenceDateTo"
                                            name="absenceDateTo"
                                            required
                                        />
                                        <small
                                            >När kommer du troligtvis att vara
                                            tillbaka? Du måste fortfarande göra
                                            en friskanmälan när du är
                                            tillbaka</small
                                        >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="comments">Kommentarer</label>
                                    <div>
                                        <textarea
                                            id="comments"
                                            name="comments"
                                            rows="4"
                                        ></textarea>
                                        <small
                                            >Vill du skicka ett medelande till
                                            din arbetsgivare i samband med
                                            anmälan? Skriv ingen känslig
                                            information som kommentar.</small
                                        >
                                    </div>
                                </div>
                                <hr />
                                <div class="info">
                                    <h4>
                                        En sjuksköterska kommer att följa upp
                                        din frånvaro.
                                    </h4>
                                    <p>
                                        Vi ringer upp frản
                                        <a href="tel:08-522 505 94"
                                            >08-522 505 94</a
                                        >. Spara detta nummer i din telefonbok.
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label for="phoneNumber"
                                        >Telefonnummer*</label
                                    >
                                    <div>
                                        <input
                                            type="tel"
                                            id="phoneNumber"
                                            name="phoneNumber"
                                            placeholder="+46 123 456 789"
                                            required
                                        />
                                        <small
                                            >Ange det nummer du finns
                                            tillgänglig på under
                                            frånvarortiden</small
                                        >
                                    </div>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input
                                            type="checkbox"
                                            name="confirmation"
                                            value="yes"
                                        />
                                        Prioritera mig
                                    </label>
                                    <small
                                        >Kryssa i om du vill at sjuksköterskan
                                        ringer up så snart som möjligt.</small
                                    >
                                </div>

                                <div class="form-group">
                                    <button type="submit" id="submitBtn">
                                        Frånvaroanmälan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </main>
        <footer>
            <small>© 2024 Qurant Företagshälsa AB (Publ)</small>
            <small>Behandling av personuppgifter / Support</small>
        </footer>
    </body>
</html>
