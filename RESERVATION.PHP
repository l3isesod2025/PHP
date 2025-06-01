<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation Hôtel L3issode</title>
    <style>
    
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }

        
        :root {
            --primary-color: #1e88e5;
            --primary-dark: #1565c0;
            --primary-light: #64b5f6;
            --accent-color: #ff9800;
            --light-gray: #f9f9f9;
            --dark-gray: #333;
        }

        
        header {
            background-color: var(--primary-color);
            color: white;
            padding: 1.5rem 0;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        header h1 {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

       
        .form-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .form-card h2 {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--primary-light);
        }

        
        .reservation-form .form-group {
            margin-bottom: 1.5rem;
        }

        .reservation-form label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--dark-gray);
        }

        .reservation-form input,
        .reservation-form select,
        .reservation-form textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            transition: border 0.3s ease;
        }

        .reservation-form input:focus,
        .reservation-form select:focus,
        .reservation-form textarea:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 2px rgba(30, 136, 229, 0.2);
        }

       
        .form-row {
            display: flex;
            gap: 1rem;
        }

        .form-row .form-group {
            flex: 1;
        }

        .submit-btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 1rem 2rem;
            font-size: 1.1rem;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            width: 100%;
        }

        .submit-btn:hover {
            background-color: var(--primary-dark);
        }

       
        .services {
            margin-top: 2rem;
        }

        .services h3 {
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .services-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1rem;
        }

        .service-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .service-item input {
            width: auto;
        }

     
        footer {
            background-color: var(--dark-gray);
            color: white;
            text-align: center;
            padding: 1.5rem 0;
            margin-top: 2rem;
        }

       
        @media (max-width: 600px) {
            .form-row {
                flex-direction: column;
                gap: 0;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Hôtel L3issode</h1>
        <p>Votre séjour de rêve commence ici</p>
    </header>

    <div class="container">
        <div class="form-card">
            <h2>Formulaire de Réservation</h2>
            
            <form class="reservation-form" action="#" method="POST">
                <div class="form-row">
                    <div class="form-group">
                        <label for="nom">Nom complet</label>
                        <input type="text" id="nom" name="nom" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="telephone">Téléphone</label>
                        <input type="tel" id="telephone" name="telephone" required>
                    </div>
                    <div class="form-group">
                        <label for="pays">Pays</label>
                        <select id="pays" name="pays" required>
                            <option value="">Sélectionner un pays</option>
                            <option value="fr">France</option>
                            <option value="be">Belgique</option>
                            <option value="ch">Suisse</option>
                            <option value="ca">Canada</option>
                            <option value="other">Autre</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="arrivee">Date d'arrivée</label>
                        <input type="date" id="arrivee" name="arrivee" required>
                    </div>
                    <div class="form-group">
                        <label for="depart">Date de départ</label>
                        <input type="date" id="depart" name="depart" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="chambre">Type de chambre</label>
                    <select id="chambre" name="chambre" required>
                        <option value="">Sélectionner un type de chambre</option>
                        <option value="standard">Standard (1 lit double)</option>
                        <option value="superieure">Supérieure (1 lit double + vue)</option>
                        <option value="deluxe">Deluxe (2 lits doubles)</option>
                        <option value="suite">Suite (Espace séparé)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="adultes">Nombre d'adultes</label>
                    <select id="adultes" name="adultes" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="enfants">Nombre d'enfants (moins de 12 ans)</label>
                    <select id="enfants" name="enfants">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>

                <div class="services">
                    <h3>Services supplémentaires</h3>
                    <div class="services-list">
                        <div class="service-item">
                            <input type="checkbox" id="petit-dej" name="services[]" value="petit-dej">
                            <label for="petit-dej">Petit déjeuner</label>
                        </div>
                        <div class="service-item">
                            <input type="checkbox" id="parking" name="services[]" value="parking">
                            <label for="parking">Parking</label>
                        </div>
                        <div class="service-item">
                            <input type="checkbox" id="spa" name="services[]" value="spa">
                            <label for="spa">Accès spa</label>
                        </div>
                        <div class="service-item">
                            <input type="checkbox" id="wifi" name="services[]" value="wifi">
                            <label for="wifi">WiFi premium</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="commentaires">Demandes spéciales</label>
                    <textarea id="commentaires" name="commentaires" rows="4"></textarea>
                </div>

                <button type="submit" class="submit-btn">Réserver maintenant</button>
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; 2023 Hôtel L3issode. Tous droits réservés.</p>
    </footer>
</body>
</html>