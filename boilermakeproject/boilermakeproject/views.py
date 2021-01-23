"""
Routes and views for the flask application.
"""

from datetime import datetime
from flask import render_template
from boilermakeproject import app

@app.route('/')
@app.route('/home')
def home():
    """Renders the home page."""
    return render_template(
        'index.html',
        title='Home Page',
    )

@app.route('/about')
def about():
    """Renders the contact page."""
    return render_template(
        'about.html',
        title='About'
    )

@app.route('/challenges')
def challenges():
    """Renders the about page."""
    return render_template(
        'challenges.html',
        title='Challenges'
    )

@app.route('/register')
def register():
    """Renders the about page."""
    return render_template(
        'registration.php',
        title='Register'
    )

@app.route('/login')
def login():
    """Renders the about page."""
    return render_template(
        'login.php',
        title='Login'
    )

#logged in pages
@app.route('/profile')
def profile():
    """Renders the about page."""
    return render_template(
        'profile.html',
        title='Profile'
    )

@app.route('/feed')
def feed():
    """Renders the about page."""
    return render_template(
        'feed.html',
        title='Social Feed'
    )

@app.route('/logout')
def logout():
    """Renders the about page."""
    return render_template(
        'logout.html',
        title='Thanks for Visiting'
    )

@app.route('/challengelist')
def challengelist():
    """Renders the about page."""
    return render_template(
        'challangelist.html',
        title='Challebges'
    )