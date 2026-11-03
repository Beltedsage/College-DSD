Imports System.IO
Imports System.Windows.Forms.LinkLabel

Public Class Form1
    Dim total As Decimal = 0.00

    Private Sub btnRock_Click(sender As Object, e As EventArgs) Handles btnRock.Click
        lstStockList.Items.Clear()
        Dim lines() As String = File.ReadAllLines("..\..\..\..\TextFiles\RockStock.txt")

        For Each line As String In lines
            lstStockList.Items.Add(line)
        Next

    End Sub

    Private Sub btnMusic_Click(sender As Object, e As EventArgs) Handles btnMusic.Click
        btnRock.Visible = True
        btnJazz.Visible = True
        btnFiction.Visible = False
        btnNonFiction.Visible = False

        lstStockList.Items.Clear()

    End Sub

    Private Sub Form1_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        btnGames.Visible = True
        btnMusic.Visible = True
        btnBooks.Visible = True
        btnXbox.Visible = False
        btnPlaystation.Visible = False
        btnRock.Visible = False
        btnJazz.Visible = False
        btnFiction.Visible = False
        btnNonFiction.Visible = False
    End Sub

    Private Sub btnBooks_Click(sender As Object, e As EventArgs) Handles btnBooks.Click
        btnFiction.Visible = True
        btnNonFiction.Visible = True
        btnJazz.Visible = False
        btnRock.Visible = False
        lstStockList.Items.Clear()

    End Sub

    Private Sub btnXbox_Click(sender As Object, e As EventArgs) Handles btnXbox.Click
        lblTitle.Visible = True
        lstStockList.Items.Clear()
        Dim lines() As String = File.ReadAllLines("..\..\..\..\TextFiles\XboxStock.txt")

        For Each line As String In lines
            lstStockList.Items.Add(line)
        Next

    End Sub

    Private Sub btnFiction_Click(sender As Object, e As EventArgs) Handles btnFiction.Click

        lstStockList.Items.Clear()
        Dim lines() As String = File.ReadAllLines("..\..\..\..\TextFiles\FictionStock.txt")

        For Each line As String In lines
            lstStockList.Items.Add(line)
        Next

    End Sub

    Private Sub btnJazz_Click(sender As Object, e As EventArgs) Handles btnJazz.Click

        lstStockList.Items.Clear()
        Dim lines() As String = File.ReadAllLines("..\..\..\..\TextFiles\JazzStock.txt")

        For Each line As String In lines
            lstStockList.Items.Add(line)
        Next

    End Sub

    Private Sub btnSelectItem_Click(sender As Object, e As EventArgs) Handles btnSelectItem.Click

        If (lstStockList.SelectedItem IsNot Nothing) Then

            lstOrderDetails.Items.Add(lstStockList.SelectedItem)

            lstOrderDetails.SelectedIndex = lstOrderDetails.Items.Count - 1

            Dim item As String = lstOrderDetails.SelectedItem.ToString()

            Select Case item
                Case "Time's Up"
                    total += 7.99
                Case "Ten"
                    total += 6.99
                Case "The Real Thing"
                    total += 5.99
                Case "Villains"
                    total += 9.99
                Case "Sonic Temple"
                    total += 9.99
                Case "The Sidewinder"
                    total += 6.5
                Case "Our Man in Paris"
                    total += 6.49
                Case "A Night in Birdland"
                    total += 2.09
                Case "Blue Train"
                    total += 1.79
                Case "Round Midnight"
                    total += 7.99
                Case "Modern Warefare 3 (2023)"
                    total += 35.79
                Case "Mass Effect 3"
                    total += 8.69
                Case "Virtua Fighter"
                    total += 3.69
                Case "BioShock"
                    total += 12.69
                Case "Street Fighter 2"
                    total += 30.69
                Case "Tekken 3"
                    total += 12.69
                Case "The Life of Pi"
                    total += 4.69
                Case "City Under One Roof"
                    total += 5.69
                Case "The World and All that it Holds"
                    total += 4.69
                Case "The Bee Sting"
                    total += 5.69
                Case "In Memoriam"
                    total += 6.69
            End Select

            Dim formattedValue As String = String.Format("{0:n}", total)
            txtTotal.Text = "£" + formattedValue

        Else
            MessageBox.Show("Please select an item to add to your order.", "Error", MessageBoxButtons.OKCancel, MessageBoxIcon.Error)

        End If

    End Sub

    Private Sub btnExit_Click(sender As Object, e As EventArgs) Handles btnExit.Click
        Me.Close()
    End Sub

    Private Sub btnRemoveItem_Click(sender As Object, e As EventArgs) Handles btnRemoveItem.Click



        If (lstOrderDetails.SelectedItem IsNot Nothing) Then
            Dim item As String = lstOrderDetails.SelectedItem.ToString
            Select Case item
                Case "Time's Up"
                    total -= 7.99
                Case "Ten"
                    total -= 6.99
                Case "The Real Thing"
                    total -= 5.99
                Case "Villains"
                    total -= 9.99
                Case "Sonic Temple"
                    total -= 9.99
                Case "The Sidewinder"
                    total -= 6.5
                Case "Our Man in Paris"
                    total -= 6.49
                Case "A Night in Birdland"
                    total -= 2.09
                Case "Blue Train"
                    total -= 1.79
                Case "Round Midnight"
                    total += 7.99
                Case "Modern Warefare 3 (2023)"
                    total += 35.79
                Case "Mass Effect 3"
                    total += 8.69
                Case "Virtua Fighter"
                    total += 3.69
                Case "BioShock"
                    total += 12.69
                Case "Street Fighter 2"
                    total += 30.69
                Case "Tekken 3"
                    total += 12.69
                Case "The Life of Pi"
                    total -= 4.69
                Case "City Under One Roof"
                    total -= 5.69
                Case "The World and All that it Holds"
                    total -= 4.69
                Case "The Bee Sting"
                    total -= 5.69
                Case "In Memoriam"
                    total -= 6.69
            End Select

            lstOrderDetails.Items.Remove(lstOrderDetails.SelectedItem)
            Dim formattedValue As String = String.Format("{0:n}", total)
            txtTotal.Text = "£" + formattedValue

        Else
            MessageBox.Show("Please select and item to remove from the order.", "Error", MessageBoxButtons.OKCancel, MessageBoxIcon.Error)

        End If

    End Sub

    Private Sub btnGames_Click(sender As Object, e As EventArgs) Handles btnGames.Click
        btnXbox.Visible = True
        btnPlaystation.Visible = True
        btnFiction.Visible = False
        btnNonFiction.Visible = False
        btnRock.Visible = False
        btnJazz.Visible = False
        lblTitle.Visible = False

    End Sub

    Private Sub btnNonFiction_Click(sender As Object, e As EventArgs) Handles btnNonFiction.Click
        MessageBox.Show("STILL IN DEVELOPMENT.", "Error", MessageBoxButtons.OK, MessageBoxIcon.Exclamation)
    End Sub

    Private Sub btnReceipt_Click(sender As Object, e As EventArgs) Handles btnReceipt.Click
        'Dim filmTextFile As Int16 = 1
        'FileOpen(filmTextFile, "orders.txt", OpenMode.Append, OpenAccess.Write)
        'For Each item In lstOrderDetails.Items
        '    Print(1, item & " " & txtTotal.Text & vbCrLf)
        'Next
        'FileClose(filmTextFile)

        Dim orderFile As New StreamWriter("../../../../orders.txt", True)
        For Each item In lstOrderDetails.Items
            If item = lstOrderDetails.SelectedItem Then
                orderFile.Write(item & ": ")
            Else
                orderFile.Write(item & ", ")
            End If
        Next
        orderFile.WriteLine("Order Total = " & txtTotal.Text)
        orderFile.Close()
    End Sub

    Private Sub Label1_Click(sender As Object, e As EventArgs) Handles lblTitle.Click

    End Sub

    Private Sub btnPlaystation_Click(sender As Object, e As EventArgs) Handles btnPlaystation.Click
        lblTitle.Visible = True
        lstStockList.Items.Clear()
        Dim lines() As String = File.ReadAllLines("..\..\..\..\TextFiles\PlaystationStock.txt")

        For Each line As String In lines
            lstStockList.Items.Add(line)
        Next
    End Sub
End Class
