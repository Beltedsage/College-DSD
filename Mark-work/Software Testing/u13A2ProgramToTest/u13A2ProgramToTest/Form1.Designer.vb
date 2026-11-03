<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class Form1
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()> _
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Required by the Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'NOTE: The following procedure is required by the Windows Form Designer
    'It can be modified using the Windows Form Designer.  
    'Do not modify it using the code editor.
    <System.Diagnostics.DebuggerStepThrough()> _
    Private Sub InitializeComponent()
        btnMusic = New Button()
        btnBooks = New Button()
        btnXbox = New Button()
        btnRock = New Button()
        btnFiction = New Button()
        btnJazz = New Button()
        lstStockList = New ListBox()
        btnSelectItem = New Button()
        btnRemoveItem = New Button()
        lstOrderDetails = New ListBox()
        txtTotal = New TextBox()
        lblTotalCost = New Label()
        btnExit = New Button()
        btnGames = New Button()
        btnNonFiction = New Button()
        lblTitle = New Label()
        btnReceipt = New Button()
        btnPlaystation = New Button()
        SuspendLayout()
        ' 
        ' btnMusic
        ' 
        btnMusic.Location = New Point(70, 47)
        btnMusic.Margin = New Padding(4, 3, 4, 3)
        btnMusic.Name = "btnMusic"
        btnMusic.Size = New Size(88, 27)
        btnMusic.TabIndex = 0
        btnMusic.Text = "Music"
        btnMusic.UseVisualStyleBackColor = True
        ' 
        ' btnBooks
        ' 
        btnBooks.Location = New Point(70, 90)
        btnBooks.Margin = New Padding(4, 3, 4, 3)
        btnBooks.Name = "btnBooks"
        btnBooks.Size = New Size(88, 27)
        btnBooks.TabIndex = 1
        btnBooks.Text = "Books"
        btnBooks.UseVisualStyleBackColor = True
        ' 
        ' btnXbox
        ' 
        btnXbox.Location = New Point(199, 130)
        btnXbox.Margin = New Padding(4, 3, 4, 3)
        btnXbox.Name = "btnXbox"
        btnXbox.Size = New Size(88, 27)
        btnXbox.TabIndex = 2
        btnXbox.Text = "Xbox"
        btnXbox.UseVisualStyleBackColor = True
        ' 
        ' btnRock
        ' 
        btnRock.Location = New Point(199, 47)
        btnRock.Margin = New Padding(4, 3, 4, 3)
        btnRock.Name = "btnRock"
        btnRock.Size = New Size(88, 27)
        btnRock.TabIndex = 3
        btnRock.Text = "Rock"
        btnRock.UseVisualStyleBackColor = True
        ' 
        ' btnFiction
        ' 
        btnFiction.Location = New Point(199, 90)
        btnFiction.Margin = New Padding(4, 3, 4, 3)
        btnFiction.Name = "btnFiction"
        btnFiction.Size = New Size(88, 27)
        btnFiction.TabIndex = 4
        btnFiction.Text = "Fiction"
        btnFiction.UseVisualStyleBackColor = True
        ' 
        ' btnJazz
        ' 
        btnJazz.Location = New Point(295, 47)
        btnJazz.Margin = New Padding(4, 3, 4, 3)
        btnJazz.Name = "btnJazz"
        btnJazz.Size = New Size(88, 27)
        btnJazz.TabIndex = 5
        btnJazz.Text = "Jazz"
        btnJazz.UseVisualStyleBackColor = True
        ' 
        ' lstStockList
        ' 
        lstStockList.FormattingEnabled = True
        lstStockList.ItemHeight = 15
        lstStockList.Location = New Point(70, 197)
        lstStockList.Margin = New Padding(4, 3, 4, 3)
        lstStockList.Name = "lstStockList"
        lstStockList.Size = New Size(202, 199)
        lstStockList.TabIndex = 6
        ' 
        ' btnSelectItem
        ' 
        btnSelectItem.Location = New Point(313, 232)
        btnSelectItem.Margin = New Padding(4, 3, 4, 3)
        btnSelectItem.Name = "btnSelectItem"
        btnSelectItem.Size = New Size(94, 70)
        btnSelectItem.TabIndex = 7
        btnSelectItem.Text = "Select >>"
        btnSelectItem.UseVisualStyleBackColor = True
        ' 
        ' btnRemoveItem
        ' 
        btnRemoveItem.Location = New Point(313, 321)
        btnRemoveItem.Margin = New Padding(4, 3, 4, 3)
        btnRemoveItem.Name = "btnRemoveItem"
        btnRemoveItem.Size = New Size(94, 61)
        btnRemoveItem.TabIndex = 8
        btnRemoveItem.Text = "<< Remove From Order"
        btnRemoveItem.UseVisualStyleBackColor = True
        ' 
        ' lstOrderDetails
        ' 
        lstOrderDetails.FormattingEnabled = True
        lstOrderDetails.ItemHeight = 15
        lstOrderDetails.Location = New Point(442, 197)
        lstOrderDetails.Margin = New Padding(4, 3, 4, 3)
        lstOrderDetails.Name = "lstOrderDetails"
        lstOrderDetails.Size = New Size(196, 199)
        lstOrderDetails.TabIndex = 9
        ' 
        ' txtTotal
        ' 
        txtTotal.Location = New Point(746, 197)
        txtTotal.Margin = New Padding(4, 3, 4, 3)
        txtTotal.Name = "txtTotal"
        txtTotal.ReadOnly = True
        txtTotal.Size = New Size(116, 23)
        txtTotal.TabIndex = 10
        ' 
        ' lblTotalCost
        ' 
        lblTotalCost.AutoSize = True
        lblTotalCost.Location = New Point(677, 201)
        lblTotalCost.Margin = New Padding(4, 0, 4, 0)
        lblTotalCost.Name = "lblTotalCost"
        lblTotalCost.Size = New Size(62, 15)
        lblTotalCost.TabIndex = 11
        lblTotalCost.Text = "Total Cost:"
        ' 
        ' btnExit
        ' 
        btnExit.Location = New Point(680, 338)
        btnExit.Margin = New Padding(4, 3, 4, 3)
        btnExit.Name = "btnExit"
        btnExit.Size = New Size(102, 59)
        btnExit.TabIndex = 12
        btnExit.Text = "Exit"
        btnExit.UseVisualStyleBackColor = True
        ' 
        ' btnGames
        ' 
        btnGames.Location = New Point(70, 130)
        btnGames.Margin = New Padding(4, 3, 4, 3)
        btnGames.Name = "btnGames"
        btnGames.Size = New Size(88, 27)
        btnGames.TabIndex = 13
        btnGames.Text = "Games"
        btnGames.UseVisualStyleBackColor = True
        ' 
        ' btnNonFiction
        ' 
        btnNonFiction.Location = New Point(295, 90)
        btnNonFiction.Margin = New Padding(4, 3, 4, 3)
        btnNonFiction.Name = "btnNonFiction"
        btnNonFiction.Size = New Size(88, 27)
        btnNonFiction.TabIndex = 14
        btnNonFiction.Text = "Non-Fiction"
        btnNonFiction.UseVisualStyleBackColor = True
        ' 
        ' lblTitle
        ' 
        lblTitle.BorderStyle = BorderStyle.FixedSingle
        lblTitle.Font = New Font("Microsoft Sans Serif", 20F, FontStyle.Bold, GraphicsUnit.Point)
        lblTitle.Location = New Point(498, 47)
        lblTitle.Margin = New Padding(4, 0, 4, 0)
        lblTitle.Name = "lblTitle"
        lblTitle.Size = New Size(246, 120)
        lblTitle.TabIndex = 15
        lblTitle.Text = "Multimedia Megastores"
        lblTitle.TextAlign = ContentAlignment.MiddleCenter
        ' 
        ' btnReceipt
        ' 
        btnReceipt.Location = New Point(718, 227)
        btnReceipt.Margin = New Padding(4, 3, 4, 3)
        btnReceipt.Name = "btnReceipt"
        btnReceipt.Size = New Size(88, 48)
        btnReceipt.TabIndex = 16
        btnReceipt.Text = "Print Receipt"
        btnReceipt.UseVisualStyleBackColor = True
        ' 
        ' btnPlaystation
        ' 
        btnPlaystation.Location = New Point(295, 130)
        btnPlaystation.Margin = New Padding(4, 3, 4, 3)
        btnPlaystation.Name = "btnPlaystation"
        btnPlaystation.Size = New Size(88, 27)
        btnPlaystation.TabIndex = 17
        btnPlaystation.Text = "Playstation"
        btnPlaystation.UseVisualStyleBackColor = True
        ' 
        ' Form1
        ' 
        AutoScaleDimensions = New SizeF(7F, 15F)
        AutoScaleMode = AutoScaleMode.Font
        ClientSize = New Size(899, 430)
        Controls.Add(btnPlaystation)
        Controls.Add(btnReceipt)
        Controls.Add(lblTitle)
        Controls.Add(btnNonFiction)
        Controls.Add(btnGames)
        Controls.Add(btnExit)
        Controls.Add(lblTotalCost)
        Controls.Add(txtTotal)
        Controls.Add(lstOrderDetails)
        Controls.Add(btnRemoveItem)
        Controls.Add(btnSelectItem)
        Controls.Add(lstStockList)
        Controls.Add(btnJazz)
        Controls.Add(btnFiction)
        Controls.Add(btnRock)
        Controls.Add(btnXbox)
        Controls.Add(btnBooks)
        Controls.Add(btnMusic)
        FormBorderStyle = FormBorderStyle.FixedSingle
        Margin = New Padding(4, 3, 4, 3)
        MaximizeBox = False
        Name = "Form1"
        SizeGripStyle = SizeGripStyle.Show
        StartPosition = FormStartPosition.CenterScreen
        Text = "Welcome to Green Fields Fruit and Veg"
        ResumeLayout(False)
        PerformLayout()
    End Sub

    Friend WithEvents btnMusic As Button
    Friend WithEvents btnBooks As Button
    Friend WithEvents btnXbox As Button
    Friend WithEvents btnRock As Button
    Friend WithEvents btnFiction As Button
    Friend WithEvents btnJazz As Button
    Friend WithEvents lstStockList As ListBox
    Friend WithEvents btnSelectItem As Button
    Friend WithEvents btnRemoveItem As Button
    Friend WithEvents lstOrderDetails As ListBox
    Friend WithEvents txtTotal As TextBox
    Friend WithEvents lblTotalCost As Label
    Friend WithEvents btnExit As Button
    Friend WithEvents btnGames As Button
    Friend WithEvents btnNonFiction As Button
    Friend WithEvents lblTitle As Label
    Friend WithEvents btnReceipt As Button
    Friend WithEvents btnPlaystation As Button
End Class
