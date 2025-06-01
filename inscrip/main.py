import tkinter as tk
from tkinter import ttk, messagebox

# Fonction pour enregistrer les données
def enregistrer():
    nom = entry_nom.get()
    postnom = entry_postnom.get()
    prenom = entry_prenom.get()
    genre = genre_var.get()
    classe = combo_classe.get()

    if not (nom and postnom and prenom and genre and classe):
        messagebox.showwarning("Champs vides", "Veuillez remplir tous les champs.")
    else:
        messagebox.showinfo("Succès", f"Inscription réussie pour {prenom} {nom}")
        # Ici, vous pouvez aussi sauvegarder les données dans un fichier ou une base de données
        entry_nom.delete(0, tk.END)
        entry_postnom.delete(0, tk.END)
        entry_prenom.delete(0, tk.END)
        genre_var.set('')
        combo_classe.set('')

# Création de la fenêtre principale
root = tk.Tk()
root.title("Formulaire d'inscription - EP MWANGAZA")
root.geometry("400x450")
root.configure(bg="#f2f2f2")

# Titre
titre = tk.Label(root, text="Inscription Élève - EP MWANGAZA", font=("Arial", 16, "bold"), bg="#f2f2f2", fg="#333")
titre.pack(pady=20)

# Cadre pour les champs
frame = tk.Frame(root, bg="#f2f2f2")
frame.pack(padx=20, pady=10)

# Champ Nom
tk.Label(frame, text="Nom :", font=("Arial", 12), bg="#f2f2f2").grid(row=0, column=0, sticky="w", pady=5)
entry_nom = tk.Entry(frame, width=30)
entry_nom.grid(row=0, column=1, pady=5)

# Champ Postnom
tk.Label(frame, text="Postnom :", font=("Arial", 12), bg="#f2f2f2").grid(row=1, column=0, sticky="w", pady=5)
entry_postnom = tk.Entry(frame, width=30)
entry_postnom.grid(row=1, column=1, pady=5)

# Champ Prénom
tk.Label(frame, text="Prénom :", font=("Arial", 12), bg="#f2f2f2").grid(row=2, column=0, sticky="w", pady=5)
entry_prenom = tk.Entry(frame, width=30)
entry_prenom.grid(row=2, column=1, pady=5)

# Champ Genre
tk.Label(frame, text="Genre :", font=("Arial", 12), bg="#f2f2f2").grid(row=3, column=0, sticky="w", pady=5)
genre_var = tk.StringVar()
genre_frame = tk.Frame(frame, bg="#f2f2f2")
genre_frame.grid(row=3, column=1, pady=5)
tk.Radiobutton(genre_frame, text="M", variable=genre_var, value="M", bg="#f2f2f2").pack(side="left")
tk.Radiobutton(genre_frame, text="F", variable=genre_var, value="F", bg="#f2f2f2").pack(side="left")

# Champ Classe
tk.Label(frame, text="Classe :", font=("Arial", 12), bg="#f2f2f2").grid(row=4, column=0, sticky="w", pady=5)
combo_classe = ttk.Combobox(frame, values=["1ère", "2ème", "3ème", "4ème", "5ème", "6ème"], state="readonly", width=27)
combo_classe.grid(row=4, column=1, pady=5)

# Bouton Enregistrer
btn = tk.Button(root, text="Enregistrer", command=enregistrer, bg="#4CAF50", fg="white", font=("Arial", 12), width=20)
btn.pack(pady=20)

root.mainloop()
