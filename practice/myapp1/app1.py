from kivymd.app import MDApp
from kivy.lang import Builder, builder
from kivymd.uix.gridlayout import MDGridLayout
from kivymd.uix.boxlayout import MDBoxLayout

class myapp(MDApp):
    def build(self):
        return Builder.load_string('''
                                   BoxLayout:
    MDToolbar:
                                   
                                   ''')
myapp().run()