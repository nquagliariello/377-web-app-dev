import tkinter as tk

def on_click():
    messageVar.config(text="Hello " + entry1.get() + " " + entry2.get() + " you clicked the box " + str(vars1.get()))

root = tk.Tk()

tk.Label(root, text="How long is your password? ").grid(row=0, column=0)

entry1 = tk.Entry(root)
entry2 = tk.Entry(root)

entry1.grid(row=0, column=1)
entry2.grid(row=1, column=1)

vars1 = tk.IntVar()
vars2 = tk.IntVar()

tk.Checkbutton(root, text="Male", variable=vars1).grid(row=2, sticky=tk.W)
tk.Checkbutton(root, text="Female", variable=vars2).grid(row=3, sticky=tk.W)


messageVar = tk.Message(root, text="")
messageVar.config(bg="lightgreen")
messageVar.grid(row=4, column=0, columnspan=2)

button = tk.Button(root, text="say hello", width=25, command=on_click)
button.grid(row=2, column=1, columnspan=2)

root.mainloop()