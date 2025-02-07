<h1>Où nous retrouver</h1>

<section class="gauche">
<p>Si vous souhaitez nous contacter pour nous donner votre témoignage ou avoir des informations 
    suplémentaires vous pouvez nous trouver Bâtiment H de l'IUT Sénart-Fontainebleau à l'adresse:
</p>
<P>240 Rue de la Motte 77550 Moissy-Cramayel Franc</P>
<img src="image/map.png" alt="Google Map">

<h2>Nos réseaux</h2>
<ul>
    <li><a href=""><img src="Spotify" alt=""></a></li>
    <li><a href=""><img src="Instagram" alt=""></a></li>
    <li><a href=""><img src="Tiktok" alt=""></a></li>
    <li><a href=""><img src="Youtube" alt=""></a></li>
</ul>
</section>

<section class="droite">

    <h2>Nous envoyer un message</h2>

    <form id="contact-us">

        <div class="form-group">
            <label id="name-label" for="nom">Nom</label>
            <input
              type="text"
              name="nom"
              id="nom"
              class="form-control"
              placeholder="Jacob"
              required
            />
          </div>

          <div class="form-group">
            <label id="firstname-label" for="firstname">Prénom</label>
            <input
              type="text"
              name="prenom"
              id="prenom"
              class="form-control"
              placeholder="Lola"
              required
            />
          </div>

          <div class="form-group">
            <label id="email-label" for="email">Email</label>
            <input
              type="email"
              name="email"
              id="email"
              class="form-control"
              placeholder="lola.jacob@mail.fr"
              required
            />
          </div>

          <div class="form-group">
            <p>Message</p>
            <textarea
              id="comments"
              class="input-textarea"
              name="comment"
              placeholder="Veuillez taper votre message ..."
              required
            ></textarea>
          </div>

          <div class="form-group">
            <button type="submit" id="submit" class="submit-button">
              Envoyer
            </button>
          </div>

    </form>
</section>
